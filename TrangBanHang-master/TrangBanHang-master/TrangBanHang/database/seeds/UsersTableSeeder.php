<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->full_name = 'admin';
        $user->role = '1';
        $user->phone = '9928282';
        $user->address = 'ha noi';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('123456');
        $user->save();


        $user = new User();
        $user->full_name = 'Nguyễn văn hùng';
        $user->role = '0';
        $user->phone = '9928282';
        $user->address = 'ha noi';
        $user->email = 'hungdhv@gmail.com';
        $user->password = bcrypt('1234567');
        $user->save();
    }
}
