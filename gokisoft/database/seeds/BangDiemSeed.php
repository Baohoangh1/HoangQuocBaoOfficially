<?php

use Illuminate\Database\Seeder;

class BangDiemSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentTime = date('Y-m-d H:i:s');
        DB::table('bangdiem')->insert([
        	'MonHocId' => '1',
        	'rollNo' => '1',
            'created_at' => $currentTime,
            'updated_at' => $currentTime,
        ]);
    }
}
