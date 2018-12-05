<?php

namespace App;

use App\Lesson;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
