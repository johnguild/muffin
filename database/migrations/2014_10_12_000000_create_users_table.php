<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

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
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('contact');
            $table->boolean('newsletter')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });

        $user = new User;
        $user->firstname = 'Muffin';
        $user->lastname = 'Administrator';
        $user->email = 'admin@muffin.ph';
        $user->password = bcrypt('basic101');
        $user->contact = '12345678910';
        $user->newsletter = false;
        $user->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
