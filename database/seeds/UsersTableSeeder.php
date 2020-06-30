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
            'first_name'=>'Admin',
            'last_name'=>'Admin',
            'email'=>'admin@webshop.be',
            'email_verified_at'=> now(),
            'phone'=>1,
            'password'=>bcrypt(12345678)]);

    }
}
