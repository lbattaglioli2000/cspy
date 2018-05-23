<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recap extends Model
{
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
