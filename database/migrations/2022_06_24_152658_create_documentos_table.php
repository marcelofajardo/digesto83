<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            
            $table->string('Titulo');
            $table->string('Descripcion');
            $table->integer('year');
            $table->integer('Numero');
            $table->string('url');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('categoria_id')->unsigned();
            $table->bigInteger('tipo_id')->unsigned();

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
        Schema::dropIfExists('documentos');
    }
}
