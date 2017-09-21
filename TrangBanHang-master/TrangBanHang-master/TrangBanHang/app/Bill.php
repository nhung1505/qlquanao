<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    public function bill_details(){
    	return $this->hasMany('App\BillDetail');
    }

    public function customer(){
    	return $this->belongsTo('App\Customer');
    }
}
