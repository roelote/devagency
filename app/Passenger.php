<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{

    public function file()
    {
        return $this->belongsTo(file::class);
    }
    
}
