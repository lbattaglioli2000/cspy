<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $guard = "web";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'profile_image_url', 'current_unit', 'current_lesson'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function scopeSearch($query, $searchTerm)
    {
        return $query->where('name', 'like', '%' .$searchTerm. '%')
            ->orWhere('email', 'like', '%' .$searchTerm. '%');
    }
}
