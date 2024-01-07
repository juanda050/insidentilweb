<?php

namespace Database\Seeders;

use App\Models\Insident;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InsidentilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insident::factory()->count(10)->create();

        Insident::create([
            'nama_website' => 'nama 1',
            'link_website' => 'www.juanda.com',
            'tanggal_kejadian' => '2023-10-10',
            'peretas' => 'juanda',
            'deskripsi' => 'sdnjkanjasnjkdkjdanjkd',
        ]);

        $months = range(1, 12); // Ambil bulan dari 1 sampai 12

        foreach ($months as $month) {
            Insident::factory()->create([
                'tanggal_kejadian' => "2023-$month-10",
                // Sesuaikan nilai lainnya sesuai kebutuhan
                'nama_website' => 'nama ' . $month,
                'link_website' => 'www.example.com',
                'peretas' => 'peretas ' . $month,
                'deskripsi' => 'Deskripsi insiden ' . $month,
            ]);
        }
        foreach ($months as $month) {
            Insident::factory()->create([
                'tanggal_kejadian' => "2022-$month-10",
                // Sesuaikan nilai lainnya sesuai kebutuhan
                'nama_website' => 'nama ' . $month,
                'link_website' => 'www.example.com',
                'peretas' => 'peretas ' . $month,
                'deskripsi' => 'Deskripsi insiden ' . $month,
            ]);
        }
        foreach ($months as $month) {
            Insident::factory()->create([
                'tanggal_kejadian' => "2021-$month-10",
                // Sesuaikan nilai lainnya sesuai kebutuhan
                'nama_website' => 'nama ' . $month,
                'link_website' => 'www.example.com',
                'peretas' => 'peretas ' . $month,
                'deskripsi' => 'Deskripsi insiden ' . $month,
            ]);
        }
    }
}
