<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCoursescertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_coursescertificates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('user_courses_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('certificate_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('National_ID')->nullable();
            $table->string('name_ar')->nullable();
            $table->string('name_en')->nullable();
            $table->string('nationaly')->nullable();
            $table->string('Qualification')->nullable();
            $table->string('phone')->nullable();
            $table->string('sex')->nullable();
            $table->string('org_num')->nullable();
            $table->string('Where_Didyou_SeeThe_Address')->nullable();
         $table->enum('certificate_status', ['requested', 'accpted','rejected'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_coursescertificates');
    }
}
