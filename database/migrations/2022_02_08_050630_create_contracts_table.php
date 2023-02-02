<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('client_name');
            $table->string('job_date');
            $table->string('email');
            $table->string('cost');
            $table->longText('address');
            $table->longText('job_details');
            $table->longText('requirements');
            $table->longText('decription');
            $table->string('profile_id');            
            $table->integer('mobile');
            $table->string('user_id');
            $table->string('end_date');
            $table->string('artist_name');
            $table->string('artist_sign');
            $table->text('sign');
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
        Schema::dropIfExists('contracts');
    }
}
