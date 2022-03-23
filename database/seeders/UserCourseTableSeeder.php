<?php

namespace Database\Seeders;

use App\Models\UserCourses;
use Illuminate\Database\Seeder;

class UserCourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserCourses::create([
            'course_id' => 1,
            'user_id' => 1,
            'certificate_id' => 1,
            'National_ID' => 123,
            'name_ar' => 'ابراهيم العناني',
            'name_en' => 'Ibrahim Al3nany',
            'nationaly' => 'Egyptian',
            'Qualification' => 'Bachelor',
            'phone' => '9660512345687',
            'sex' => 'ذكر',
            'org_num' => 12,
            'Where_Didyou_SeeThe_Address' => 'أخرى',
        ]);
    }
}
