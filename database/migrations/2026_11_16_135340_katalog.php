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
        Schema::create('katalog', function (Blueprint $table) {
            $table->increments('katalog_id'); 
            $table->unsignedBigInteger('kategori_id');

            $table->foreign('kategori_id')
                ->references('kategori_id')
                ->on('kategori_produk')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->string('nama_katalog');
            $table->decimal('harga', 12, 2); // Menggunakan decimal untuk harga (bisa diganti ->integer('harga') jika format bulat/Rupiah)
            $table->text('deskripsi')->nullable();
            $table->string('gambar_katalog')->nullable(); // Ditulis 2x di struktur Anda, dibuat 1 kolom saja
            $table->integer('minimum_order')->default(14);
            $table->string('estimasi_produk')->nullable();
            $table->timestamp('created_at')->useCurrent();

            $table->timestamp('updated_at')

                ->useCurrent()

                ->useCurrentOnUpdate();

        });

    }

    public function down(): void
    {
        Schema::dropIfExists('katalog');
    }
};
