<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFiledsToSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            //
            $table->string('ouridentity')->nullable();
            $table->string('OurDimensions')->nullable();
            $table->string('Carreers')->nullable();
            $table->string('POVTeam')->nullable();
            $table->string('Gallery')->nullable();
            $table->string('Contactus')->nullable();
         
 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            //
        });
    }
}
