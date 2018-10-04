<?php

use Illuminate\Database\Seeder;

class NegaraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('negaras')->truncate();
 
		product::create(array(
			'nama_negara'=>'Indonesia'
		));
		product::create(array(
			'nama_negara'=>'Malaysia'
		));
		product::create(array(
			'nama_negara'=>'Singapura'
		));
		product::create(array(
			'nama_negara'=>'Korea Selatan'
		));
    }
}
