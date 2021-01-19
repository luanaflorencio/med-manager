<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Patient::create([
            'name' => 'joão',
            'birth' => '17/02/2014',
            'weight' => '30,600',
            'height' => '1,20',
            'user_id' => 1
        ]);
    }
}
