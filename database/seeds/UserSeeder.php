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
        DB::table('users')->insert([
            "name"=>"Cosme Fulanito",
            "email"=>"cosmefulanito.81@gmail.com",
            "password"=>Hash::make("esmidobleexacto"),
        ]);
        DB::table('users')->insert([
            "name"=>"Vicepresidente",
            "email"=>"vicepresidenteejecutivo@gmail.com",
            "password"=>Hash::make("traigaaeseperro"),
        ]);
    }
}
