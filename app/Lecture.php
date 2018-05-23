<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lesson;

class Lecture extends Model
{
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}