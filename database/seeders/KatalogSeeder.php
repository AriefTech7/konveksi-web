<?php

namespace Database\Seeders;

use App\Models\Katalog;
use App\Models\kategori_produk as KategoriProduk;
use Illuminate\Database\Seeder;

class KatalogSeeder extends Seeder
{
    public function run(): void
    {
        $kategoriIds = KategoriProduk::pluck('kategori_id');

        if ($kategoriIds->isEmpty()) {
            $this->call(KategoriProdukSeeder::class);
            $kategoriIds = KategoriProduk::pluck('kategori_id');
        }

        $jenisProduk = [
            'Kaos Combed 30s Sablon Plastisol',
            'Kaos Combed 24s Polos Premium',
            'Kemeja Lapangan PDL American Drill',
            'Kemeja Kantor PDH Nagata Drill',
            'Polo Shirt Lacoste CVC Bordir',
            'Hoodie Zipper Cotton Fleece',
            'Jacket Varsity Komunitas',
            'Jersey Futsal Full Printing Dryfit',
            'Jas Almamater Kampus Furing Penuh',
            'Kaos Event Sablon DTF',
        ];

        $bahanKain = [
            'Cotton Combed 30s',
            'Cotton Combed 24s',
            'American Drill',
            'Nagata Drill',
            'Lacoste CVC Pique',
            'Cotton Fleece Gramasi 280',
            'Dryfit Milano',
            'High Twist',
        ];

        $estimasiList = [
            '7 - 10 Hari Kerja',
            '10 - 14 Hari Kerja',
            '14 - 21 Hari Kerja',
        ];

        foreach ($kategoriIds as $kategoriId) {
            for ($i = 1; $i <= 5; $i++) {
                $nama = fake()->randomElement($jenisProduk).' Series '.$i;
                $bahan = fake()->randomElement($bahanKain);

                Katalog::create([
                    'kategori_id' => $kategoriId,
                    'nama_katalog' => $nama,
                    'harga' => fake()->numberBetween(55, 250) * 1000,
                    'deskripsi' => "Produksi {$nama} menggunakan material {$bahan}. Jahitan rapi standar garmen dan distro, tersedia ukuran S, M, L, XL, XXL serta custom bordir atau sablon.",
                    'gambar_katalog' => null,
                    'minimum_order' => fake()->randomElement([14, 24, 36, 50]),
                    'estimasi_produk' => fake()->randomElement($estimasiList),
                ]);
            }
        }
    }
}
