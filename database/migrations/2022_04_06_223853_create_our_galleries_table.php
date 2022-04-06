<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_galleries', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('img')->nullable();

        $table->bigInteger('photocategories_id')->unsigned()->nullable();
        $table->foreign('photocategories_id')->references('id')->on('photocategories')->onDelete('cascade');

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
        Schema::dropIfExists('our_galleries');
    }
}
