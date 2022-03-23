<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCourses extends Model
{
    use HasFactory;

    protected $table = 'user_courses';
    protected $fillable = [
        'course_id',
        'user_id',
        'certificate_id',
        'National_ID',
        'name_ar',
        'name_en',
        'nationaly',
        'Qualification',
        'phone',
        'sex',
        'org_num',
        'Where_Didyou_SeeThe_Address',
        'status',
        'certificate_status',



    ];

    public function course()
    {
        return $this->belongsTo(\App\Models\Course::class);
    }



    public function certificate()
    {
        return $this->belongsTo(\App\Models\certificate::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

}
