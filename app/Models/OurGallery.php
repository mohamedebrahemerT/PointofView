<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurGallery extends Model
{
     use HasFactory;
 protected $table = 'our_galleries';
    protected $fillable = [
    'title',
    'img',
    'photocategories_id'
     
     
    ];

    

      public function merchant() 
     {
        return $this->hasOne(\App\Models\Photocategories::class, 'id', 'photocategories_id');
    }
}
