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
            $table->increments('id_user');
            $table->string('name', 100);
            $table->string('email', 100)->unique();
            $table->string('ttl', 100)->nullable();
            $table->string('gender', 100)->nullable();
            $table->string('alamat', 100)->nullable();
            $table->string('kel', 100)->nullable();
            $table->string('kec', 100)->nullable();
            $table->string('kab', 100)->nullable();
            $table->string('prov', 100)->nullable();
            $table->string('phone', 15)->nullable();
            $table->string('password');
            $table->string('user_image')->nullable();
            $table->enum('role', ['administartor', 'manajemen', 'player', 'team', 'guest'])->default('guest');
            // $table->tinyInteger('verified')->nullable();
            // $table->timestamp('email_verified_at')->nullable();
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
