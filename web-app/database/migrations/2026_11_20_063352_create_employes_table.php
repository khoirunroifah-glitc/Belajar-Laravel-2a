<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->integer('id');
            $table->string('nama', 100);
            $table->text('alamat')->nullable();
            $table->enum('gender', ['L', 'P']);
            $table->integer('gaji');
            $table->timestamps();
            
            $table->primary('id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('employes');
    }
};
