<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Status;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('statuses')->truncate();
 
		product::create(array(
			'jenis_status'=>'Belum Membayar'
		));
		product::create(array(
			'jenis_status'=>'Telah Membayar'
		));
		product::create(array(
			'jenis_status'=>'Barang Telah Dibeli'
		));
		product::create(array(
			'jenis_status'=>'Barang Telah Dikirim'
		));
		product::create(array(
			'jenis_status'=>'Barang Sudah Diterima'
		));
    }
}
