<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
          $table->id();
        $table->foreignId('department_id')->constrained()->onDelete('cascade');
            $table->string('title')->nullable();
            $table->longText('desc')->nullable();
            $table->longText('what_you_will_learn')->nullable();
            $table->string('img')->nullable();
            $table->integer('price')->nullable();
            $table->integer('registered_users_count')->nullable();
            $table->string('lang')->nullable();
            $table->integer('duration')->nullable();
            $table->tinyInteger('certificate')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
