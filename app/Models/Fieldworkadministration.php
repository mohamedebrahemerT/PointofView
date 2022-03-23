<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fieldworkadministration extends Model
{
    use HasFactory;
     protected $table = 'fieldworkadministrations';
    protected $fillable = [
    'title',
    'desc',
    'img',
     
     
    ];
}
