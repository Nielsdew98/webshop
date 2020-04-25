<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'is_active'=>1,
            'first_name'=>'Niels',
            'last_name'=>'De Witte',
            'email'=>'niels984@gmail.com',
            'phone'=>1,
            'role_id'=>1,
            'address_id'=>1,
            'password'=>bcrypt(12345678)]);

    }
}
