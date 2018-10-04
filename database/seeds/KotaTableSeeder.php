<?php

use Illuminate\Database\Seeder;

class KotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kotas')->truncate();
 
		product::create(array(
			'negara_id'=>'1',
			'nama_kota'=>'Surabaya'
		));
		product::create(array(
			'negara_id'=>'1',
			'nama_kota'=>'Malang'
		));
    }
}
