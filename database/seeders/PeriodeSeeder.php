<?php

namespace Database\Seeders;

use App\Models\Periode;
use Illuminate\Database\Seeder;
use Database\Seeders\PeriodeSeederSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PeriodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Periode::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'mini', 'ekonomi', 'menengah', 'mewah'
        ];

        foreach ($data as $value) {
            Periode::insert([
                'periode' => $value
            ]);
        }
    }
}
