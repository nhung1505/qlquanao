<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    public function product(){
    	return $this->belongsTo('App\Product');
    }

    public function bill(){
    	return $this->belongsTo('App\Bill');
    }
}
