<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->date('dob');
            $table->string('username');
            $table->string('mobile');
            $table->string('email');
            $table->string('id_type');
            $table->string('id_no');
            $table->string('gender');
            $table->string('profile_img');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('category');
            $table->foreign('category')->references('id')->on('categories');
            $table->unsignedInteger('location');
            $table->foreign('location')->references('id')->on('locations');          
            $table->string('skills')->nullable();
            $table->string('exp_yrs')->nullable();
            $table->mediumText('worked_loc');
            $table->string('course_name');
            $table->string('course_cert_img')->nullable();
            $table->string('qualification');
            $table->string('studio')->nullable();
            $table->longText('studio_address')->nullable();           
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
