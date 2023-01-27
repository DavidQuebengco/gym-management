<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;

    protected $table = "Members";

    protected $fillable = [
        'name',
        'email',
        'membership_expiration',
        'trainer_id',
        'membership_id',

    ];
}
