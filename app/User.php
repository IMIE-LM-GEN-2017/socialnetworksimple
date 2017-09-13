<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'first_name',
        'last_name',
        'picture_url',
        'birthdate',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }

    public function articles()
    {
        return $this->hasMany('App\Article');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function events()
    {
        return $this->hasMany('App\Event');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * @todo Vérifier que cette relation est la bonne
     */
    public function receptions()
    {
        return $this->hasMany('App\Reception');
    }

    public function messagesSent()
    {
        return $this->hasMany('App\Message', 'sender_id');
    }

    public function messagesReceived()
    {
        return $this->hasMany('App\Message', 'target_id');
    }
}
