<?php

use Illuminate\Database\Seeder;

class SinhVienSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$currentTime = date('Y-m-d H:i:s');
        DB::table('sinhvien')->insert([
            'ten' => 'Bao',
            'tuoi' =>'16',
            'address' =>'Ha Noi',
            'email' => 'Bao@gmail.com',
            'created_at' => $currentTime,
            'updated_at' => $currentTime,
        ]);
    }
}
