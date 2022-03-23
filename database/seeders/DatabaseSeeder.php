<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //\App\Models\User::factory(10)->create();
       $this->call(CertificatesTableSeeder::class);
       $this->call(SettingTableSeeder::class);
      $this->call(DepartmentTableSeeder::class);
        $this->call(SliderTableSeeder::class);
        $this->call(CourseTableSeeder::class);
        $this->call(blogTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UserCourseTableSeeder::class);


    }
}
