<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resourcescapabilities extends Model
{
    use HasFactory;
 protected $table = 'resourcescapabilities';
    protected $fillable = [
    'title',
    'desc',
    'img',
     
     
    ];

}
