<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ORM
        $user = new User;

        $user->fullname = "Jeremias Springfield";
        $user->email = "jeremy@gmail.com";
        $user->phone = '3105283238';
        $user->birthdate = '1980-11-09';
        $user->gender = 'Male';
        $user->address = 'Str Siempre Viva';
        $user->role = 'Admin';
        $user->password = bcrypt('admin');

        $user->save();

        // method Insert
        DB::table('users')->insert([
            'fullname' => 'Homer Simpson',
            'email' => 'homer@gmail.com',
            'phone' => '3146367852',
            'birthdate' => '1984-05-06',
            'gender' => 'Male',
            'address' => 'Str Siempre Viva',
            'role' => 'Customer',
            'password' => Hash::make('customer'),
           
        ]);
    }
}
