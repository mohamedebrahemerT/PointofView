<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';
    protected $fillable = [
        'department_id',
        'title',
        'desc',
        'what_you_will_learn',
        'img',
        'price',
        'registered_users_count',
        'lang',
        'duration',
        'certificate',
        'registered_users_count_status'

    ];


    public function department()
    {
        return $this->belongsTo(\App\Models\Department::class);
    }
}
