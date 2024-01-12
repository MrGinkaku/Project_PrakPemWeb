<?php

namespace Database\Seeders;
use App\Models\karyawan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \faker\Factory::create('id_ID');
        for($i=0;$i<10;$i++){
            Karyawan::create([
                'nama'=>$faker->name,
                'jabatan'=>$faker->jobTitle,
                'gaji'=>$faker->numberBetween(2000000, 10000000)
            ]);
        }
    }
}
