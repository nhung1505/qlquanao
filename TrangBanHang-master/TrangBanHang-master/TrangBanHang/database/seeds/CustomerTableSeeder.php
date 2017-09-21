<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new Customer();
        $user->id = '1';
        $user->user_id = '1';
        $user->name = 'phan van chau';
        $user->gender = '1';
        $user->address = 'ha noi';
        $user->email = 'phanchaudhv@gmail.com';
        $user->phone_number = '09393933';
        $user->note = 'khach hang tiem nang';
        $user->save();


        $user = new Customer();
        $user->id = '2';
        $user->user_id = '2';
        $user->name = 'phan van Nhat';
        $user->gender = '0';
        $user->address = 'ha noi';
        $user->email = 'phanchaudhv@gmail.com';
        $user->phone_number = '09393933';
        $user->note = 'khach hang vo van';
        $user->save();

    }
}
