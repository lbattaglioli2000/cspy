<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
<<<<<<< HEAD
use Illuminate\Support\Facades\Cache;
=======
>>>>>>> 6fb102cfe084ae84be1199fe2f65100834a307fe

class User extends Authenticatable
{
    use Notifiable;

<<<<<<< HEAD
    protected $guard = "web";

=======
>>>>>>> 6fb102cfe084ae84be1199fe2f65100834a307fe
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD
        'name', 'email', 'password', 'profile_image_url', 'current_unit', 'current_lesson'
=======
        'name', 'email', 'password',
>>>>>>> 6fb102cfe084ae84be1199fe2f65100834a307fe
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
<<<<<<< HEAD

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public static function scopeSearch($query, $searchTerm)
    {
        return $query->where('name', 'like', '%' .$searchTerm. '%')
            ->orWhere('email', 'like', '%' .$searchTerm. '%');
    }

    public function isOnline()
    {
        return Cache::has('user-is-online-' . $this->id);
    }
=======
>>>>>>> 6fb102cfe084ae84be1199fe2f65100834a307fe
}
