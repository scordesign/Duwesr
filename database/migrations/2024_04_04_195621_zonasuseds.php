<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Zonasuseds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('zonasuseds' , function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id_zona_use');
            $table->string('desc_zona_use');
            $table->bigInteger('zona_zon_use')->unsigned();
            $table->bigInteger('zona_venta_id')->unsigned();
            $table->timestamps();
            $table->foreign('zona_zon_use')->references('id')->on('zonas')->onDelete('cascade');
            $table->foreign('zona_venta_id')->references('id')->on('ventas')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
