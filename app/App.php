<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
class App extends Model implements Authenticatable
{
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
