<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;
        // Add this line:
    protected $fillable = [
        'header',
        'audio',
        'images',
        'message',
    ];
}
