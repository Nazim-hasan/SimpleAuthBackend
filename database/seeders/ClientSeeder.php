<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ClientSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('clients')->insert([
            'name'=>'Nazim Hasan',
            'password'=>'nazu12345',
            'email'=>'nazim@gmail.com',
        ]);
        DB::table('clients')->insert([
            'name'=>Str::random(10),
            'password'=>Str::random(15),
            'email'=>Str::random(10).'@gmail.com',
        ]);
    }
}
