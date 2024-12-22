<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kerusakan;

class KerusakanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode_kerusakan' => 'H1',
                'nama_kerusakan' => 'Rusak pada IC Power',
                'prior_probability' => 0.2,
                'solusi' => 'Ganti dengan IC yang baru. Proses penggantian ini membutuhkan keahlian khusus, tidak disarankan untuk mengganti/memperbaikinya sendiri.'
            ],
            [
                'kode_kerusakan' => 'H2',
                'nama_kerusakan' => 'Rusak pada IC VGA',
                'prior_probability' => 0.2,
                'solusi' => 'Bongkar chasing komputer atau keluarkan motherboard dari chasing atau laptop Anda. Hati-hati ketika membongkar motherboard. Panaskan chipset VGA menggunakan alat seperti hot air gun, hair dryer, atau lilin. Jika gagal, ulangi hingga berhasil.'
            ],
            [
                'kode_kerusakan' => 'H3',
                'nama_kerusakan' => 'Rusak pada Inverter/Kabel fleksibel laptop',
                'prior_probability' => 0.1,
                'solusi' => 'Ganti dengan inverter yang baru. Jika masih bermasalah maka ganti layar monitor Anda dengan yang baru.'
            ],
            [
                'kode_kerusakan' => 'H4',
                'nama_kerusakan' => 'Rusak pada LCD',
                'prior_probability' => 0.3,
                'solusi' => 'Cek konektor atau socket yang berhubungan dengan monitor. Jika masih bermasalah, disarankan untuk mengganti dengan yang baru. Namun jangan lupa untuk memilih LCD yang sejenis.'
            ],
            [
                'kode_kerusakan' => 'H5',
                'nama_kerusakan' => 'Rusak pada Keyboard',
                'prior_probability' => 0.2,
                'solusi' => 'Bersihkan keyboard dari kotoran atau debu. Jika masih bermasalah, disarankan untuk mengganti dengan yang baru. Namun jangan lupa untuk memilih Keyboard yang sejenis.'
            ],
            // Tambahkan solusi untuk data lain jika ada
        ];

        Kerusakan::insert($data);
    }
}
