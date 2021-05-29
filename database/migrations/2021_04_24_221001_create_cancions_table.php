<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCancionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancions', function (Blueprint $table) {
            $table->id('idCancion');
            $table->varchar('nombreCancion','50');
            $table->date('fechaGrabacion');
            $table->varchar('nombreArtista','50');
            $table->varchar('duracionCancion','5');
            $table->int('idAlbumfk');
            $table->varchar('estadoCancion','10');
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
        Schema::dropIfExists('cancions');
    }
}
