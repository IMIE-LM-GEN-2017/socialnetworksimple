<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable=['content', 'user_id', 'post_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function reception(){
        return $this->belongsTo('App\Reception');
    }
}
