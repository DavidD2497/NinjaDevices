<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenesTable extends Migration
{
    public function up()
    {
        Schema::create('ordenes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->decimal('total', 10, 2);
            $table->string('estado')->default('Pendiente');
            $table->json('producto');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ordenes');
    }
}

