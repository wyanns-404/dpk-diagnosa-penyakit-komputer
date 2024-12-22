<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dataset;

class DatasetSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['kerusakan_id' => 1, 'gejala_id' => 1, 'probability' => 1.0],
            ['kerusakan_id' => 1, 'gejala_id' => 2, 'probability' => 0.5],
            ['kerusakan_id' => 1, 'gejala_id' => 3, 'probability' => 1.0],
            ['kerusakan_id' => 1, 'gejala_id' => 4, 'probability' => 0.5],
            ['kerusakan_id' => 1, 'gejala_id' => 5, 'probability' => 0],
            ['kerusakan_id' => 1, 'gejala_id' => 6, 'probability' => 0],
            ['kerusakan_id' => 1, 'gejala_id' => 7, 'probability' => 0],
            ['kerusakan_id' => 1, 'gejala_id' => 8, 'probability' => 0],
            ['kerusakan_id' => 1, 'gejala_id' => 9, 'probability' => 0],
            ['kerusakan_id' => 1, 'gejala_id' => 10, 'probability' => 0],
            ['kerusakan_id' => 1, 'gejala_id' => 11, 'probability' => 0],
            ['kerusakan_id' => 1, 'gejala_id' => 12, 'probability' => 0],
            ['kerusakan_id' => 1, 'gejala_id' => 13, 'probability' => 0],
            ['kerusakan_id' => 2, 'gejala_id' => 1, 'probability' => 0.5],
            ['kerusakan_id' => 2, 'gejala_id' => 2, 'probability' => 0],
            ['kerusakan_id' => 2, 'gejala_id' => 3, 'probability' => 0.5],
            ['kerusakan_id' => 2, 'gejala_id' => 4, 'probability' => 0],
            ['kerusakan_id' => 2, 'gejala_id' => 5, 'probability' => 1.0],
            ['kerusakan_id' => 2, 'gejala_id' => 6, 'probability' => 0.5],
            ['kerusakan_id' => 2, 'gejala_id' => 7, 'probability' => 0.5],
            ['kerusakan_id' => 2, 'gejala_id' => 8, 'probability' => 0],
            ['kerusakan_id' => 2, 'gejala_id' => 9, 'probability' => 0],
            ['kerusakan_id' => 2, 'gejala_id' => 10, 'probability' => 0],
            ['kerusakan_id' => 2, 'gejala_id' => 11, 'probability' => 0],
            ['kerusakan_id' => 2, 'gejala_id' => 12, 'probability' => 0],
            ['kerusakan_id' => 2, 'gejala_id' => 13, 'probability' => 0.5],
            ['kerusakan_id' => 3, 'gejala_id' => 1, 'probability' => 1.0],
            ['kerusakan_id' => 3, 'gejala_id' => 2, 'probability' => 0],
            ['kerusakan_id' => 3, 'gejala_id' => 3, 'probability' => 0],
            ['kerusakan_id' => 3, 'gejala_id' => 4, 'probability' => 0],
            ['kerusakan_id' => 3, 'gejala_id' => 5, 'probability' => 1.0],
            ['kerusakan_id' => 3, 'gejala_id' => 6, 'probability' => 0],
            ['kerusakan_id' => 3, 'gejala_id' => 7, 'probability' => 1.0],
            ['kerusakan_id' => 3, 'gejala_id' => 8, 'probability' => 1.0],
            ['kerusakan_id' => 3, 'gejala_id' => 9, 'probability' => 0],
            ['kerusakan_id' => 3, 'gejala_id' => 10, 'probability' => 0],
            ['kerusakan_id' => 3, 'gejala_id' => 11, 'probability' => 0],
            ['kerusakan_id' => 3, 'gejala_id' => 12, 'probability' => 0],
            ['kerusakan_id' => 3, 'gejala_id' => 13, 'probability' => 0],
            ['kerusakan_id' => 4, 'gejala_id' => 1, 'probability' => 0.33],
            ['kerusakan_id' => 4, 'gejala_id' => 2, 'probability' => 0],
            ['kerusakan_id' => 4, 'gejala_id' => 3, 'probability' => 0],
            ['kerusakan_id' => 4, 'gejala_id' => 4, 'probability' => 0],
            ['kerusakan_id' => 4, 'gejala_id' => 5, 'probability' => 0.33],
            ['kerusakan_id' => 4, 'gejala_id' => 6, 'probability' => 0],
            ['kerusakan_id' => 4, 'gejala_id' => 7, 'probability' => 0],
            ['kerusakan_id' => 4, 'gejala_id' => 8, 'probability' => 0.33],
            ['kerusakan_id' => 4, 'gejala_id' => 9, 'probability' => 1.0],
            ['kerusakan_id' => 4, 'gejala_id' => 10, 'probability' => 1.0],
            ['kerusakan_id' => 4, 'gejala_id' => 11, 'probability' => 0.33],
            ['kerusakan_id' => 4, 'gejala_id' => 12, 'probability' => 0],
            ['kerusakan_id' => 4, 'gejala_id' => 13, 'probability' => 0],
            ['kerusakan_id' => 5, 'gejala_id' => 1, 'probability' => 0],
            ['kerusakan_id' => 5, 'gejala_id' => 2, 'probability' => 0],
            ['kerusakan_id' => 5, 'gejala_id' => 3, 'probability' => 0],
            ['kerusakan_id' => 5, 'gejala_id' => 4, 'probability' => 0],
            ['kerusakan_id' => 5, 'gejala_id' => 5, 'probability' => 1.0],
            ['kerusakan_id' => 5, 'gejala_id' => 6, 'probability' => 0],
            ['kerusakan_id' => 5, 'gejala_id' => 7, 'probability' => 0],
            ['kerusakan_id' => 5, 'gejala_id' => 8, 'probability' => 0],
            ['kerusakan_id' => 5, 'gejala_id' => 9, 'probability' => 0],
            ['kerusakan_id' => 5, 'gejala_id' => 10, 'probability' => 0],
            ['kerusakan_id' => 5, 'gejala_id' => 11, 'probability' => 0],
            ['kerusakan_id' => 5, 'gejala_id' => 12, 'probability' => 0.5],
            ['kerusakan_id' => 5, 'gejala_id' => 13, 'probability' => 1.0],
            // Tambahkan sesuai hubungan gejala dan kerusakan
        ];

        Dataset::insert($data);
    }
}

