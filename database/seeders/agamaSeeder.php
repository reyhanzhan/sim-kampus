<?php

namespace Database\Seeders;

use App\Models\agamaa;
use Illuminate\Database\Seeder;
use Database\Seeders\agamaSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class agamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        agamaa::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'mini', 'ekonomi', 'menengah', 'mewah'
        ];

        foreach ($data as $value) {
            agamaa::insert([
                'namaagama' => $value
            ]);
        }
    }
}
