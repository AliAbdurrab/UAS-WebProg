<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ebook')->insert([
            ['title' => 'temanku', 'author' => 'Mr. budi', 'description' => 'This is descriptions text of temanku.'],
            ['title' => 'ayahku', 'author' => 'Mr. arap', 'description' => 'This is descriptions text of ayahku.'],
            ['title' => 'ibuku', 'author' => 'Mr. edho', 'description' => 'This is descriptions text of ibuku.'],
            ['title' => 'kakakku', 'author' => 'Mr. orang', 'description' => 'This is descriptions text of kakakku.']
        ]);
    }
}
