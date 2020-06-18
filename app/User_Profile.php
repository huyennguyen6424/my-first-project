<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User_Profile extends Model
{
    use SoftDeletes;
    public function user(){
        return $this->belongsTo('App\Users');
    }
}
