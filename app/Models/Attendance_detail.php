<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance_detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'attendance_id',
        'student_id',
        'status',
    ];
}
