<?php

namespace Database\Seeders;

use Hash;
use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          /////////////// Department  
            $add=new Department;
            $add->title='دورات صحية';
            $add->courses_count=0;
            $add->save();

             /////////////// Department  
            $add=new Department;
            $add->title='دورات مهنية';
            $add->courses_count=0;
            $add->save();
    



    }
}
