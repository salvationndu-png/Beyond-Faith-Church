<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    
protected $fillable = [
    'ebook_id',
    'email',
    'amount',
    'status',
    'trans_id',
    'ref_id',
];


}
