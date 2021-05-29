<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artistas', function (Blueprint $table) {
            $table->bigIncrements('idArtista');
            $table->varchar('documento','20')->unique();
            $table->varchar('tipoDocumento','20');
            $table->varchar('nombreArtista','50');
            $table->date('fechaCimArtista',);
            $table->varchar('emailArtista','50');
            $table->bigIncrements('idDisquerasfk');
            $table->varchar('estadoArtista','10');
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
        Schema::dropIfExists('artistas');
    }
}
