<?php

use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;

class bodegaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bodega')->insert([
        	'bod_nombre'=>'Televisores',
        	
        ]);
        DB::table('bodega')->insert([
        	'bod_nombre'=>'Lavadoras',
        	
        ]);
        DB::table('bodega')->insert([
        	'bod_nombre'=>'refrigeradores',
        	
        ]);
    }
}
