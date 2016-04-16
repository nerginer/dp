<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Dp extends Model
{
      public function tags()
    {
       return $this->hasMany(tag::class);
       
    }
}
