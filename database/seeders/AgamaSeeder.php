<?php

namespace Database\Seeders;

use App\Models\Agama;
use Illuminate\Database\Seeder;
use Database\Seeders\AgamaSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Agama::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'mini', 'ekonomi', 'menengah', 'mewah'
        ];

        foreach ($data as $value) {
            Agama::insert([
                'namaagama' => $value
            ]);
        }
    }
}
