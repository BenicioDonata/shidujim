<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsAcceptanceLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms_acceptance_levels', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('form_id')->nullable(false);
            $table->foreign('form_id')->references('id')->on('forms')->onDelete('cascade');
            $table->unsignedInteger('acceptance_level_id')->nullable(false);
            $table->foreign('acceptance_level_id')->references('id')->on('acceptance_levels')->onDelete('cascade');
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
        Schema::dropIfExists('forms_acceptance_levels');
    }
}
