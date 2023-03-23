<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;

    protected $fillable = [
        'shift_id',
        'course_id',
        'teacher_id',
        'starting_date',
        'ending_date',
        'seats',
    ];
}
