<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // /**
    //  * Run the migrations.
    //  */
    // public function up(): void
    // {
    //     Schema::create('books', function (Blueprint $table) {
    //         $table->id('id_buku');
    //         $table->string('judul');
    //         $table->string('penulis');
    //         $table->integer('tahun_terbit');
    //         $table->foreignId('id_penerbit')->constrained('tb_penerbit');
    //         $table->string('genre');
    //         $table->string('text');
    //         $table->integer('stok');
    //         $table->string('isbn');
    //     });
    // }

    // /**
    //  * Reverse the migrations.
    //  */
    // public function down(): void
    // {
    //     Schema::dropIfExists('tb_buku');
    // }
};
