<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;

    public function class():BelongsTo{
        return $this->belongsTo(Classes::class,'classes_id');
    }
    public function attendance():BelongsTo{
        return $this->belongsTo(Attendance::class,'attendance_id');
    }
}
