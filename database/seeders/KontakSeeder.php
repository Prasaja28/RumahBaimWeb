<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kontak;
class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kontak::create([
            'Jenis' => 'alamat',
            'isian' => 'Jl. Imogiri Timur KM 11 Wonokromo Pleret Bantul',
        ]);
        
        Kontak::create([
            'Jenis' => 'email',
            'isian' => 'rumahbaim18@gmail.com',
        ]);

        Kontak::create([
            'Jenis' => 'whatsapp',
            'isian' => '+6285643945374',
        ]);

        Kontak::create([
            'Jenis' => 'instagram',
            'isian' => 'rbproperty.id',
        ]);
    }
}
