<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
      public function dps()
    {
       return $this->belongsToMany(dp::class);
       
    }
}
