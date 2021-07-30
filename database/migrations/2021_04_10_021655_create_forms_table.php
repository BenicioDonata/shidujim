<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //gender,

        Schema::create('forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('name_hebrew');
            $table->string('lastname');
            $table->string('second_lastname');
            $table->unsignedInteger('gender_id')->nullable(false);
            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('cascade');
            $table->string('date_of_birth');
            $table->string('age');
            $table->unsignedInteger('maritalstatus_id')->nullable(false);
            $table->foreign('maritalstatus_id')->references('id')->on('marital_statuses')->onDelete('cascade');
            $table->string('profession');
            $table->string('email');
            $table->string('main_phone');
            $table->string('count_sons');
            $table->unsignedInteger('religiouscompliancelevel_id')->nullable(false);
            $table->foreign('religiouscompliancelevel_id')->references('id')->on('religious_compliance_levels')->onDelete('cascade');
            $table->string('reference_one')->nullable(true);
            $table->string('reference_two')->nullable(true);
            $table->string('community_assists');
            $table->string('rabanim_know')->nullable(true);
            $table->string('name_school');
            $table->string('name_secondary_school')->nullable(true);
            $table->unsignedInteger('smoker_id')->nullable(false);
            $table->foreign('smoker_id')->references('id')->on('smokers')->onDelete('cascade');
            $table->unsignedInteger('son_id')->nullable(false);
            $table->foreign('son_id')->references('id')->on('sons')->onDelete('cascade');
            $table->unsignedInteger('location_id')->nullable(false);
            $table->foreign('location_id')->references('id')->on('localities')->onDelete('cascade');
            $table->unsignedInteger('coupleson_id')->nullable(false);
            $table->foreign('coupleson_id')->references('id')->on('couple_sons')->onDelete('cascade');
            $table->string('years_range_from');
            $table->string('years_range_to');
            $table->string('find_partner');
            $table->unsignedInteger('familypuritylaw_id')->nullable(false);
            $table->foreign('familypuritylaw_id')->references('id')->on('family_purity_laws')->onDelete('cascade');
            $table->string('about_u');
            $table->string('about_u_partner');
            $table->enum('is_check',[0, 1])->default('0');
            $table->string('date_check')->nullable(true);
            $table->enum('is_blocked',[0, 1])->default('0');
            $table->string('date_blocked')->nullable(true);
            $table->enum('is_matched',[0, 1])->default('0');
            $table->string('date_matched')->nullable(true);
            $table->enum('is_couple',[0, 1])->default('0');
            $table->string('date_couple')->nullable(true);
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
        Schema::dropIfExists('forms');
    }
}
