<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    // using accessor during get the value........
    public function getIsAnswerAttribute($value)
    {
        if($value ==1)
            return true;
        else
            return false;
    }

}
