<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ourpartners extends Model
{
    
    use HasFactory;
 protected $table = 'ourpartners';
    protected $fillable = [
    'title',
    'img',
     
     
    ];
     
}
