<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCoursescertificate extends Model
{
    use HasFactory;

    protected $table = 'user_coursescertificates';
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
        'user_courses_id'
 


    ];

    public function course()
    {
        return $this->belongsTo(\App\Models\Course::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
