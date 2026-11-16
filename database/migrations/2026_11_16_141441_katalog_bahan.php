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
        Schema::create('katalog_bahan', function (Blueprint $table) {
            $table->id('bahan_id');

            $table->string('nama_bahan');
            $table->string('kualitas_bahan');
            $table->text('deskripsi')->nullable();
            $table->string('gambar_bahan')->nullable();
            $table->enum('status_ketersediaan', ['tersedia', 'tidak_tersedia', 'perlu_konfirmasi']);

            $table->timestamp('created_at')->useCurrent();

            $table->timestamp('updated_at')

                ->useCurrent()

                ->useCurrentOnUpdate();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('katalog_bahan');

    }
};
