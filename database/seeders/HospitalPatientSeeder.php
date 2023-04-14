<?php

namespace Database\Seeders;

use App\Models\Hospital;
use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HospitalPatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hospital = Hospital::create(['name' => 'RS Al-Islam', 'address' => 'Jl. Soekarno Hatta', 'email' => 'halo@alislam.com', 'phone' => '022782909']);

        Patient::create(['name' => 'John', 'address' => 'Jl. Soekarno Hatta',  'phone' => '0813549875', 'hospital_id' => $hospital->id]);

        Patient::create(['name' => 'Doe', 'address' => 'Jl. Cibiru',  'phone' => '08132124584', 'hospital_id' => $hospital->id]);

        Patient::create(['name' => 'Bowo', 'address' => 'Jl. Gede Bage',  'phone' => '08184569852', 'hospital_id' => $hospital->id]);

        $hospital = Hospital::create(['name' => 'RS Edelweiss', 'address' => 'Jl. Soekarno Hatta 2', 'email' => 'halo@edelweiss.com', 'phone' => '022745698']);

        Patient::create(['name' => 'Dodo', 'address' => 'Jl. Margahayu raya',  'phone' => '0832546982', 'hospital_id' => $hospital->id]);

        Patient::create(['name' => 'Agus', 'address' => 'Jl. Ciwastra',  'phone' => '08198784522', 'hospital_id' => $hospital->id]);

        $hospital = Hospital::create(['name' => 'RS Mayapada', 'address' => 'Jl. Ters. Buah Batu', 'email' => 'halo@mayapada.com', 'phone' => '0227369852']);

        Patient::create(['name' => 'Maya', 'address' => 'Jl. Bojongsoang Raya',  'phone' => '08120203030', 'hospital_id' => $hospital->id]);
    }
}
