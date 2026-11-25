<?php

namespace Database\Seeders;

use App\Models\kategori_produk as KategoriProduk;
use Illuminate\Database\Seeder;

class KategoriProdukSeeder extends Seeder
{
    public function run(): void
    {
        $daftarKategori = [
            [
                'nama_kategori' => 'Kaos Sablon & Polos',
                'deskripsi_kategori' => 'Kaos oblong bahan Cotton Combed 24s dan 30s dengan pilihan sablon Plastisol, DTF, atau Rubber.',
                'gambar_kategori' => null,
            ],
            [
                'nama_kategori' => 'Kemeja PDL & PDH',
                'deskripsi_kategori' => 'Kemeja seragam lapangan dan kantor bahan American Drill atau Nagata Drill lengkap dengan bordir komputer.',
                'gambar_kategori' => null,
            ],
            [
                'nama_kategori' => 'Polo Shirt',
                'deskripsi_kategori' => 'Kaos berkerah bahan Lacoste CVC atau Pique untuk seragam perusahaan, panitia, dan komunitas.',
                'gambar_kategori' => null,
            ],
            [
                'nama_kategori' => 'Jaket & Hoodie',
                'deskripsi_kategori' => 'Hoodie zipper, pullover, varsity, dan jaket bomber berbahan Cotton Fleece atau Taslan.',
                'gambar_kategori' => null,
            ],
            [
                'nama_kategori' => 'Jersey & Seragam Olahraga',
                'deskripsi_kategori' => 'Jersey futsal, sepak bola, badminton, dan lari full printing bahan Dryfit Milano atau Brazil.',
                'gambar_kategori' => null,
            ],
            [
                'nama_kategori' => 'Jas Almamater & Blazer',
                'deskripsi_kategori' => 'Jas almamater kampus, OSIS, dan instansi dengan furing penuh serta bordir logo.',
                'gambar_kategori' => null,
            ],
        ];

        foreach ($daftarKategori as $item) {
            KategoriProduk::updateOrCreate(
                ['nama_kategori' => $item['nama_kategori']],
                [
                    'deskripsi_kategori' => $item['deskripsi_kategori'],
                    'gambar_kategori' => $item['gambar_kategori'],
                ]
            );
        }
    }
}
