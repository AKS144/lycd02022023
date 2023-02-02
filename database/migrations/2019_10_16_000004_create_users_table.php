<?php



use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\Schema;



class CreateUsersTable extends Migration

{

    public function up()

    {

        Schema::create('users', function (Blueprint $table) {

            $table->increments('id');

            $table->string('name');

            $table->string('email')->unique();

            $table->integer('otp')->nullable();

            $table->date('exp_date')->nullable();

            $table->date('notify_date')->nullable();

            $table->date('suspend_date')->nullable();

            $table->tinyInteger('package')->default('0');

            $table->tinyInteger('status')->default('0');

            $table->datetime('email_verified_at')->nullable();

            $table->string('password');

            $table->string('remember_token')->nullable();

            $table->timestamps();

            $table->softDeletes();

        });

    }

}

