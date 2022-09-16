<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = ['name', 'type', 'size', 'price'];
    protected $table = 'foods';
    use HasFactory;
}
