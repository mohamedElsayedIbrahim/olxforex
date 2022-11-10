<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depoister extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullName','account','phone','amount','type'
    ];
}
