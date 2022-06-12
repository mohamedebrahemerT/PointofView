<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
       protected $table = 'sliders';
	protected $fillable = [
	'title',
	'desc',
	'img',
	'url',
	'READ_MORE_text',
'READ_MORE_visible',
'order'
	 
	];
   

}
