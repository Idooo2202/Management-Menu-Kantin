<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('menu_kantins', function (Blueprint $table) {
            $table->id();
            $table->string('kode_menu')->unique();
            $table->string('nama_menu');
            $table->string('kategori');
            $table->decimal('harga', 12, 2);
            $table->integer('stok');
            $table->string('status')->default('tak tersedia');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_kantins');
    }
};
