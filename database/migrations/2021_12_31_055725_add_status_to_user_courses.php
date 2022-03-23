<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToUserCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_courses', function (Blueprint $table) {
            //
             
        $table->enum('status', ['pending', 'accepted','completed','canceled'])->default('pending');

         $table->enum('certificate_status', ['requested', 'accpted','rejected'])->nullable();

         

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_courses', function (Blueprint $table) {
            //
        });
    }
}
