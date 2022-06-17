<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransCode extends Model
{
    use HasFactory;
    protected $fillable = [
        'trans_code',
        'description',
        'trans_type',
    ];
}
