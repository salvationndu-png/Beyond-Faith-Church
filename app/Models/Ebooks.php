<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ebooks extends Model
{
    use HasFactory;

    // Allow mass assignment
    protected $fillable = [
        'header',
        'message',
        'images',
        'pdf',
        'price',
        'original_price',
        'is_on_sale',
        'pages',
        'file_size',
        'category',
        'rating',
        'reviews_count',
        'downloads_count',
    ];
}
