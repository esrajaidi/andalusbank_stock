<?php

use App\Assets;
use Illuminate\Database\Seeder;

class AssetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Assets::create([
            'id' => 1, 
            'name' => 'اجهزة كمبيوتر',
        ]);
         Assets::create([
            'id' => 2, 
            'name' => 'الاات ',
        ]);

        Assets::create([
            'id' => 3, 
            'name' => 'معدات',
        ]);

        Assets::create([
            'id' => 4, 
            'name' => 'أثاث',
        ]);
        Assets::create([
            'id' => 5, 
            'name' => 'سيارات',
        ]);
        Assets::create([
            'id' => 6, 
            'name' => 'سيارة نقل نقود',
        ]);
        Assets::create([
            'id' => 7, 
            'name' => 'طابعات',
        ]);
        Assets::create([
            'id' => 8, 
            'name' => 'ختم',
        ]);
        Assets::create([
            'id' => 9, 
            'name' => 'خزينة',
        ]);
        Assets::create([
            'id' => 10, 
            'name' => '  مفتاح خزنة',
        ]);
      	
        Assets::create([
            'id' => 11, 
            'name' => 'شاشات',
        ]);

        Assets::create([
            'id' => 12, 
            'name' => 'ماسحة ضوئية',
        ]);
        Assets::create([
            'id' => 13, 
            'name' => 'طابعة صكوك',
        ]);
        
    }
}
