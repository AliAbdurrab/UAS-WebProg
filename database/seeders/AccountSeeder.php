<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account')->insert([
            [
                'account_id' => '1',
                'role_id' => 1,
                'gender_id' => 2,
                'first_name' => 'elon',
                'middle_name' => 'musk',
                'last_name' => 'Admin',
                'email' => 'elonmusk@admin.com',
                'password' => bcrypt('elonmusk123'),
                'display_picture_link' => 'images/profile/elonmusk.jpg'
            ]
        ]);
    }
}
