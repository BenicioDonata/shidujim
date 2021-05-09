<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsStudiesLvlSeeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms_studies_lvl_seeks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('form_id')->nullable(true);
            $table->foreign('form_id')->references('id')->on('forms')->onDelete('cascade');
            $table->unsignedInteger('study_id')->nullable(true);
            $table->foreign('study_id')->references('id')->on('studies')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('forms_studies_lvl_seeks');
    }
}
