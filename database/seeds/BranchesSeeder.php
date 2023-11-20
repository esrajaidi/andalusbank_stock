<?php

use App\Branches;
use Illuminate\Database\Seeder;

class BranchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $branche = Branches::create([
            'branche_number' => '100', 
            'branche_name' => 'الإدارة',
            'active'=>1
        ]);
        $branche2 = Branches::create([
            'branche_number' => '101', 
            'branche_name' => 'الرئيسي',
            'active'=>1
        ]);
        $branche3 = Branches::create([
            'branche_number' => '102', 
            'branche_name' => 'البرج',
            'active'=>1
        ]);
        $branche4 = Branches::create([
            'branche_number' => '103', 
            'branche_name' => 'الشط',
            'active'=>1
        ]);

        $branche5= Branches::create([
            'branche_number' => '201', 
            'branche_name' => 'مصراته',
            'active'=>1
        ]);
        $branche6= Branches::create([
            'branche_number' => '202', 
            'branche_name' => 'زليتن',
            'active'=>1
        ]);
    }
}
