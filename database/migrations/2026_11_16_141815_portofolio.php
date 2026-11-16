<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('portofolio', function (Blueprint $table) {
            $table->id('portofolio_id');

            $table->unsignedBigInteger('kategori_id');

            $table->string('gambar_portofolio');
            $table->text('deskripsi_portofolio')->nullable();

            $table->timestamp('created_at')->useCurrent();

            $table->timestamp('updated_at')

                ->useCurrent()

                ->useCurrentOnUpdate();

            $table->foreign('kategori_id')
                ->references('kategori_id')
                ->on('kategori_produk')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('portofolio', function (Blueprint $table) {
            $table->dropForeign(['kategori_id']);
        });

        Schema::dropIfExists('portofolio');
    }
};
