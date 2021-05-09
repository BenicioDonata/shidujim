<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms_languages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('form_id')->nullable(false);
            $table->foreign('form_id')->references('id')->on('forms')->onDelete('cascade');
            $table->unsignedInteger('language_id')->nullable(false);
            $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
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
        Schema::dropIfExists('forms_languages');
    }
}
