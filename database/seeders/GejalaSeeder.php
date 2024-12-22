<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gejala;

class GejalaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['kode_gejala' => 'G1', 'nama_gejala' => 'Laptop tidak menyala'],
            ['kode_gejala' => 'G2', 'nama_gejala' => 'Layar blank hitam'],
            ['kode_gejala' => 'G3', 'nama_gejala' => 'Tombol power tidak merespons'],
            ['kode_gejala' => 'G4', 'nama_gejala' => 'Ketika dicolokkan charger,laptop tiba-tiba mati'],
            ['kode_gejala' => 'G5', 'nama_gejala' => 'Mesin masih hidup'],
            ['kode_gejala' => 'G6', 'nama_gejala' => 'Jika dihubungkan pada LCD external menggunakan Vga masih menampilka kan gmbar'],
            ['kode_gejala' => 'G7', 'nama_gejala' => 'Cahaya pada laptop redup tapi masih menampilkan gambar'],
            ['kode_gejala' => 'G8', 'nama_gejala' => 'Layar kadang hidup-mati ketika menamplkan gambar'],
            ['kode_gejala' => 'G9', 'nama_gejala' => 'Terdapat garis-garis pada LCD'],
            ['kode_gejala' => 'G10', 'nama_gejala' => 'Terdapat Dot Pixel pada laptop'],
            ['kode_gejala' => 'G11', 'nama_gejala' => 'Terdapat goresan/hanya bisa menampilkan sebagian gambar pada LCD'],
            ['kode_gejala' => 'G12', 'nama_gejala' => 'Ada sebagian/semua tombol keyboard tidak berfungsi'],
            ['kode_gejala' => 'G13', 'nama_gejala' => 'Ketika dinyalakan terdengar bunyi beep panjang/terus-menerus pada laptop'],
            // Tambahkan sesuai file Excel
        ];

        Gejala::insert($data);
    }
}

