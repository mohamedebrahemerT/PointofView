<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carreer extends Model
{
    use HasFactory;
    protected $table = 'carreers';
    protected $fillable = [
    'title',
    'desc',
    'img',
     
     
    ];

    


}
