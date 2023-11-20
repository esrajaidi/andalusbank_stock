<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $permissions = [
            'role-list',//1
            'role-create',//2
            'role-edit',//3
            'role-delete',//4
 
            'user-list',//5
            'user-create',//6
            'user-edit',//7
            'user-delete',//8
            'user-changestatus',//9
 
            'branche-list',//10
            'branche-create',//11
            'branche-edit',//12
            'branche-changestatus',//13
        ];
     
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
