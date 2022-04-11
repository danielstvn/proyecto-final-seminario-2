<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carritos', function (Blueprint $table) {
            $table->id();
            $table->biginteger('idCliente');
            $table->biginteger('idProducto');
            $table->string('nombre');
            $table->string('tipo');
            $table->string('material');
            $table->string('color');
            $table->string('detalle',500);
            $table->string('img',500);
            $table->decimal('valor',16,2);

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
        Schema::dropIfExists('carritos');
    }
};
