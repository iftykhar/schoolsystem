<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Attendance extends Model
{
    use HasFactory;

    public function student():HasMany{
        return $this->hasMany(Student::class,'id');
    }
    public function teacher():HasMany{
        return $this->hasMany(Teacher::class,'id');
    }
}
