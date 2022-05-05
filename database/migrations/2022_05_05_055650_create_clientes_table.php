<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{





    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('email');
            $table->timestamps();
        });
    }






    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
