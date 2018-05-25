<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use App\Unit;
use App\Lecture;

class Lesson extends Model
{
    use Searchable;
    
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
