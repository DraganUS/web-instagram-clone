<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'full_name','email', 'password'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function posts()
    {
        return $this->hasMany(Post::class);
    }


    public function stories()
    {
        return $this->hasMany(Story::class);
    }


    public function comments()
    {
        return $this->hasMany(Post::class);
    }


    public function followedBy()
    {
        return $this->belongsToMany(User::class, 'follows', 'following_id', 'user_id');
    }



    public function following()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_id');

    }
}
