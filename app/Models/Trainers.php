<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainers extends Model
{
    use HasFactory;

    protected $table = "Trainers";

    protected $fillable = [
        'name',
        'email',
        'specialization',
        'phone',
    ];
}
