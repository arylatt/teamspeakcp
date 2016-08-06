<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

use App\Models\User;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_username')->unique();
            $table->string('user_email')->unique();
            $table->string('user_password');
            $table->string('user_name');
            $table->rememberToken();
            $table->timestamps();
        });

        User::create([
            'user_username' => 'admin',
            'user_email' => 'admin@localhost',
            'user_password' => bcrypt('admin'),
            'user_name' => 'Administrator'
        ]);
    }
    
    public function down()
    {
        Schema::drop('users');
    }
}
