<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsQualitiesSeeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms_qualities_seeks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('form_id')->nullable(true);
            $table->foreign('form_id')->references('id')->on('forms')->onDelete('cascade');
            $table->unsignedInteger('quality_id')->nullable(true);
            $table->foreign('quality_id')->references('id')->on('qualities')->onDelete('cascade');
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
        Schema::dropIfExists('forms_qualities_seeks');
    }
}
