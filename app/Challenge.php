<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    public function unit()
    {
      return $this->belongsTo(Lesson::class);
    }
}
