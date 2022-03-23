<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurValues extends Model
{
    use HasFactory;
 protected $table = 'our_values';
    protected $fillable = [
    'title',
    'desc',
    'img',
     
     
    ];
}
