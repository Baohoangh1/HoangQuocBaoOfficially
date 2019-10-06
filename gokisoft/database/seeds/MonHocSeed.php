<?php

use Illuminate\Database\Seeder;

class MonHocSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentTime = date('Y-m-d H:i:s');
        DB::table('monhoc')->insert([
        	'MonHoc' => 'Toan',
            'created_at' => $currentTime,
            'updated_at' => $currentTime,
        ]);
    }
}
