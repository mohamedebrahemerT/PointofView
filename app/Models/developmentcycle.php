<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class developmentcycle extends Model
{
    use HasFactory;
     protected $table = 'developmentcycles';
    protected $fillable = [
    'title',
    'desc',
    'img',
     
     
    ];
}
