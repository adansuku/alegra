<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workers')->insert([
            'name' => "admin@example.com",
            'email' => "admin@example.com",
            'password' => Hash::make('admin'),
        ]);
    }
}
