<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['title', 'content', 'user_id', 'post_category_id'];

    public function user(){
        return $this->belongsTo('App\User');
        /* belongsTo veut dire 'appartient à' */
    }

    public function answers(){
        return $this->hasMany('App\Answer');
    }

    public function post_category(){
        return $this->belongsTo('App\PostCategory');
    }
}
