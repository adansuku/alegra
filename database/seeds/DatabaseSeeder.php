<?php

use Illuminate\Database\Seeder;
use App\Models\Worker_role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $today = date('Y-m-d H:i:s');
        $roles = array(
            array('role'=>'Administradora','created_at'=>$today,'updated_at'=>$today),
            array('role'=>'Trabajadora','created_at'=>$today,'updated_at'=>$today),
            array('role'=>'Gestora','created_at'=>$today,'updated_at'=>$today)
        );
        
        Worker_role::insert($roles);
    }
}
