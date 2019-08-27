@extends('layouts.app')
@section('intro')
  <div class="intro">
    <div class="container">
      <h1>Make your neighbors envious!</h1>
      <p>Let the professionals at We Dew Lawns, Inc. service your lawn.</p>
    </div>
  </div>
@endsection
@section('content')
<table class='highlight centered plans'>
    <thead>
      <tr>
          <th>Service</th>
          <th>Description</th>
          <th>Pruning</th>
          <th>Fertilizer</th>
          <th>Mowing</th>
          <th>Cleaning</th>
          <th></th>
      </tr>
    </thead>
    
    <tbody>
      <tr>
        <td>Trial</td>
        <td>Get a healthy, weed-free lawn with our patented monthly weed-free service.</td>
        <td><i class="material-icons">panorama_fish_eye</i></td>
        <td><i class="material-icons">panorama_fish_eye</i></td>
        <td></td>
        <td></td>
        <td>
            <div>
                <a class="btn btn-primary"
                    href="/plans/subscribe/plan_FduAwOAXHAUV4D">
                    $10
                </a>
            </div>
        </td>
      </tr>
      <tr>
        <td>Regular</td>
        <td>Make your lawn shine! With this plan you get monthly spraying, fertilizing, and spring/fall aeration.</td>
        <td><i class="material-icons">panorama_fish_eye</i></td>
        <td><i class="material-icons">panorama_fish_eye</i></td>
        <td><i class="material-icons">panorama_fish_eye</i></td>
        <td></td>
        <td>
            <div>
                <a class="btn btn-primary"
                    href="/plans/subscribe/plan_Fdu9EtdLJBzXnS">
                    $30
                </a>
            </div>
        </td>
      </tr>
      <tr>
        <td>Premium</td>
        <td>Take your lawn to the next level with our Premium plan.
                With this plan you get monthly spraying and fertilizing.</td>
        <td><i class="material-icons">panorama_fish_eye</i></td>
        <td><i class="material-icons">panorama_fish_eye</i></td>
        <td><i class="material-icons">panorama_fish_eye</i></td>
        <td><i class="material-icons">panorama_fish_eye</i></td>
        <td>
            <div>
                <a class="btn btn-primary"
                    href="/plans/subscribe/plan_Fdu92JzwGqspER">
                    $50
                </a>
            </div>
        </td>
      </tr>
    </tbody>
</table>
@endsection