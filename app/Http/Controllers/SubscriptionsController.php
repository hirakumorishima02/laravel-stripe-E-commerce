<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;

class SubscriptionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }
    
    public function index()
    {
        return view('subscriptions.index');
    }

    public function subscribe($planId)
    {
        if ($this->planNotAvailable($planId)) {
            return redirect()->route('plans');
        }
        return view('subscriptions.subscribe', compact('planId'));
    }
    
    protected function planNotAvailable($id){
    $available = ['plan_Fdu92JzwGqspER', 'plan_Fdu9EtdLJBzXnS', 'plan_FduAwOAXHAUV4D'];
        if ( ! in_array($id, $available)){ //in_arrayで$availableの中から$idを探す
         return true;
        }
        return false;
    }
    
    public function process(Request $request)
    {
        $planId = $request->get('plan_id');
        if ($this->planNotAvailable($planId)) {
            return redirect()->back()->withErrors('Plan is required');
        }
        Stripe::setApiKey(env('STRIPE_API_SECRET'));
        $user = Auth::user();
        $coupon = $request->coupon;
        $user->newSubscription('main', $planId)->withCoupon($coupon)->create($request->stripe_token,
        ['email' => $user->email,
            'metadata' => [
                'name' => $user->name,
            ]]);
        return redirect('invoices');
    }

    public function invoices()
    {
        $user = Auth::user();
        return view('subscriptions.invoices', compact('user'));
    }
    
    public function downloadInvoice($id)
    {
        return Auth::user()->downloadInvoice($id, [
            'header'  => 'We Dew Lawns',
            'vendor'  => 'WeDewLawns',
            'product' => Auth::user()->stripe_plan,
            'street' => '123 Lawn Drive',
            'location' => 'Lawndale NC, 28076',
            'phone' => '703.555.1212',
            'url' => 'www.wedewlawns.com',
        ]);
    }
    
    public function swapPlans(Request $request)
    {
      $planId = $request->get('plan_id');
      if ($this->planNotAvailable($planId)) {
          return redirect()->back()->withErrors('Plan is required');
      }
      Auth::user()->subscription('main')->swap($planId);
      return redirect()->back()->withMessage('Plan changed!');
    }
    
    public function cancelPlan(Request $request)
    {
        $planId = $request->get('plan_id');
      Auth::user()->subscription('main')->cancel($planId);
      return redirect('invoices')->with('message','Your plan has been cancelled');
    }
}
