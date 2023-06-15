<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Classes extends Model
{
    use HasFactory;

    function hasOne($related, $foreignKey = null, $localKey = null)
    {
        
    }
    public function student():HasOne{
        return $this->hasOne(Student::class,'id');
    }
    public function teacher():HasOne{
        return $this->hasOne(Teacher::class,'id');
    }
}
