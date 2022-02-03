<?php

namespace App\Models\Graebens;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'message',
        'email'
    ];
}
