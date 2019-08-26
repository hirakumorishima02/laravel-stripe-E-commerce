<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];
    protected $fillable = ['sku', 'name','description','price','is_downloadble'];
    
    public function orders(){
        return $this->hasMany('App\Order');
    }
}
