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
    public Function up()
    {
        Schema::create('users', Function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('users',Function(Blueprint $table){

            $table->string('foto','100')->after('direccion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public Function down()
    {
        Schema::table('users',function(Blueprint $table){

        $table->dropColumn('foto');

        });
    }    
}
