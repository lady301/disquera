<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisquerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disqueras', function (Blueprint $table) {
            $table->bigIncrements('idDisqueras');
            $table->varchar('nitDisquera','20')->unique();
            $table->varchar('nombreDisquera','100');
            $table->varchar('telefonoDisquera','15');
            $table->varchar('direccionDisquera','100');
            $table->varchar('estadoDisquera','10');
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
        Schema::dropIfExists('disqueras');
    }
}
