<?php

namespace App\Models\Graebens;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrivingCourses extends Model
{
    use HasFactory;
    protected $table = "driving_courses";

    protected $fillable = [
        'course_name'
    ];
}
