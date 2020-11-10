<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('admin_id');
            $table->string('admin_mail')->unique();
            $table->string('admin_pass');
            $table->string('admin_familyname');
            $table->string('admin_firstname');
            $table->string('admin_kana_familyname');
            $table->string('admin_kana_firstname');
            $table->string('admin_birthday_year');
            $table->string('admin_birthday_month');
            $table->string('admin_birthday_day');
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
        Schema::dropIfExists('admins');
    }
}
