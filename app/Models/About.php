<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'description',
        'phone',
        'email',
        'address',
        'facebook',
        'instagram',
        'whatsapp',
    ];
}
