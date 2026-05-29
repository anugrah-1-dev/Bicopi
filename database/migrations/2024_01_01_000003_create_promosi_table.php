<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('promosi', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->decimal('harga', 12, 2)->nullable();
            $table->text('deskripsi_1')->nullable();
            $table->string('kelebihan_1')->nullable();
            $table->string('kelebihan_2')->nullable();
            $table->string('kelebihan_3')->nullable();
            $table->text('deskripsi_2')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('promosi');
    }
};
