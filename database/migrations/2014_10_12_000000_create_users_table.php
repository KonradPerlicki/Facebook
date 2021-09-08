<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('gender',10);
            $table->date('birth_date');
            $table->string('about_me')->nullable();
            $table->string('location')->nullable();
            $table->string('working_at')->nullable();
            $table->string('relationship',30)->nullable();
            $table->string('phone',9)->nullable()->unique();
            $table->string('profile_image')->default('profile_image/user.png');
            $table->string('background_image')->default('background_image/background.jpg');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
