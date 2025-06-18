<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    //
     public function computer(){
        return $this->belongsTo(Computer::class);
    }
      protected $fillable = ['name','email','cell_number'];
}
