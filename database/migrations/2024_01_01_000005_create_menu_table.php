<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->uuid('id_menu')->primary();
            $table->string('nama_menu');
            $table->string('foto_menu')->nullable();
            $table->text('deskripsi_menu')->nullable();
            $table->decimal('harga_menu', 12, 2);
            $table->string('kategori')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('menu');
    }
};
