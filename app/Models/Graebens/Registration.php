<?php

namespace App\Models\Graebens;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $primaryKey = 'student_id';

    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'gender',
        'user_identification',
        'user_email',
        'course_branch',
        'course_selection'
    ];
}
