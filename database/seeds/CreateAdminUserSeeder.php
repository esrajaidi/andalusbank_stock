<?php

use Illuminate\Database\Seeder;
  
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
  
class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::create([
            'name' => 'esra', 
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'active'=>1

        ]);
    
        $role = Role::create(['id'=> 1,'name' => 'مدير نظام']);
     
        $permissions = Permission::pluck('id','id')->all();
   
        $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);


       
    }
}
