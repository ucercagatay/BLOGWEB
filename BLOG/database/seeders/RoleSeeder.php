<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_names=['Admin','Üye'];
      foreach($role_names as $role_name){
          DB::table('roles')->insert([

              'role_name'=>$role_name,
              ]);
      }


      }


}
