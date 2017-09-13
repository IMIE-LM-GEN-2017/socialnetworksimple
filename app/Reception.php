<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reception extends Model
{
    protected $fillable=['user_id', 'answer_id'];

    public function user(){
        return $this->hasOne('App\User');
    }

    public function event(){
        return $this->hasOne('App\Event');
    }
}
