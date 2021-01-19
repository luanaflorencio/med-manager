<?php

namespace Database\Seeders;

use App\Models\Equipment;
use Illuminate\Database\Seeder;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Equipment::create([
            'name' => 'Estetoscópio',
            'identificationnumber' => 179,
            'user_id' => 1
        ]);
    }
}
