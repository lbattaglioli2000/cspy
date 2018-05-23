<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Unit;
use App\Lecture;

class Lesson extends Model
{

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function lecture()
    {
        return $this->hasOne(Lecture::class);
    }

    public function recap()
    {
        return $this->hasOne(Recap::class);
    }

    public function challenge()
    {
        return $this->hasOne(Challenge::class);
    }
}
