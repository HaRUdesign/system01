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
            $table->increments('user_id');
            $table->string('user_mail')->unique();
            $table->string('user_pass');
            $table->string('user_familyname');
            $table->string('user_firstname');
            $table->string('user_kana_familyname');
            $table->string('user_kana_firstname');
            $table->string('user_sex');
            $table->string('user_tel');
            $table->string('user_address');
            $table->string('user_birthday_year');
            $table->string('user_birthday_month');
            $table->string('user_birthday_day');
            $table->string('user_newsletter');
            $table->longText('user_comment');
            $table->timestamp('email_verified_at')->nullable();
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
