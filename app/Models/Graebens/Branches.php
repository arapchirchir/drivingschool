<?php

namespace App\Models\Graebens;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branches extends Model
{
    use HasFactory;
    protected $table = "branches";

    protected $fillable = [
        'branch_name',
        'branch_contact'
    ];
}
