<?php

use Illuminate\Database\Seeder;

class BanHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sanpham')->insert([
        	'thumbnail' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxpXL8RZLjeCtfrOCExnlbhb6UO_UzlDY_TIor90_l0AcxMI7kRQ',
        	'title' => 'AO NIKE AUTHENTIC',
            'price' => '20',
            'discount' => '25',
        ]);

        DB::table('sanpham')->insert([
        	'thumbnail' => 'http://miniramp.pl//eng_pl_t-shirt-Nike-Sb-Dri-fit-OBSIDIAN-19462_1.jpg',
        	'title' => 'AO NIKE AUTHENTIC',
            'price' => '20',
            'discount' => '25',
        ]);

        DB::table('sanpham')->insert([
        	'thumbnail' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxpXL8RZLjeCtfrOCExnlbhb6UO_UzlDY_TIor90_l0AcxMI7kRQ',
        	'title' => 'AO NIKE AUTHENTIC',
            'price' => '20',
            'discount' => '25',
        ]);

        DB::table('sanpham')->insert([
        	'thumbnail' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxpXL8RZLjeCtfrOCExnlbhb6UO_UzlDY_TIor90_l0AcxMI7kRQ',
        	'title' => 'AO NIKE AUTHENTIC',
            'price' => '20',
            'discount' => '25',
        ]);
    }
}
