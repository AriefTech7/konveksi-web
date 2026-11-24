<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('request_pesanan', function (Blueprint $table) {
            $table->id('request_id');

            /*
            |--------------------------------------------------------------------------
            | Foreign Key
            |--------------------------------------------------------------------------
            */

            $table->unsignedBigInteger('customer_id');

            $table->unsignedInteger('katalog_id');

            // Bahan boleh kosong karena customer belum tentu memilih bahan
            $table->unsignedBigInteger('bahan_id')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Detail Request Pesanan
            |--------------------------------------------------------------------------
            */

            $table->unsignedInteger('jumlah_pesanan');

            $table->text('ukuran_detail')->nullable();
            $table->string('teknik_custom')->nullable();

            $table->text('deskripsi_kebutuhan')->nullable();

            $table->date('deadline_kebutuhan')->nullable();

            $table->string('file_desain')->nullable();

            /*
            |--------------------------------------------------------------------------
            | Status Request
            |--------------------------------------------------------------------------
            */



            $table->text('catatan_admin')->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')
                ->useCurrent()
                ->useCurrentOnUpdate();

            /*
            |--------------------------------------------------------------------------
            | Relasi Antar Tabel
            |--------------------------------------------------------------------------
            */

            $table->foreign('customer_id')
                ->references('customer_id')
                ->on('customer')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->foreign('katalog_id')
                ->references('katalog_id')
                ->on('katalog')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->foreign('bahan_id')
                ->references('bahan_id')
                ->on('katalog_bahan')
                ->cascadeOnUpdate()
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('request_pesanan', function (Blueprint $table) {
            $table->dropForeign(['customer_id']);
            $table->dropForeign(['katalog_id']);
            $table->dropForeign(['bahan_id']);
        });

        Schema::dropIfExists('request_pesanan');
    }
};
