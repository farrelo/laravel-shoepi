<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Alpha Tester',
            'email' => 'alpha@pi.com',
            'phone_num' => '08123456789',
            'password' => bcrypt('alpha123'),
            'created_at' => '2019-12-25 14:59:46',
            'updated_at' => '2019-12-25 16:00:58'        
            ]);
    }
}
