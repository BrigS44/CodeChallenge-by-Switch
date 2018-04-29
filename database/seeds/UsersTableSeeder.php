<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        $users =[

            [
                'name' => 'SWITCH',
                'email' => 'udrugaswitch@gmail.com',
                'password' => bcrypt('switch123456'),
                'index_number' => '0000',
                'phone' => '063077442',
                'faculty' => 'Fakultet prirodoslovno matematičkih i dogojnih znanosti',
                'study' =>'Informatika',
                'type' => 'admin',

            ],

            [
                'name' => 'Student1',
                'email' => 'student1@gmail.com',
                'password' => bcrypt('123456'),
                'index_number' => '12345',
                'phone' => '063077442',
                'faculty' => 'Fakultet prirodoslovno matematičkih i dogojnih znanosti',
                'study' =>'Informatika',
                'type' => 'student',

            ],

            [
                'name' => 'Student2',
                'email' => 'student2@gmail.com',
                'password' => bcrypt('123456'),
                'index_number' => '12345',
                'phone' => '063077442',
                'faculty' => 'Fakultet prirodoslovno matematičkih i dogojnih znanosti',
                'study' =>'Informatika',
                'type' => 'student',

            ],

            [
                'name' => 'Student3',
                'email' => 'student3@gmail.com',
                'password' => bcrypt('123456'),
                'index_number' => '12345',
                'phone' => '063077442',
                'faculty' => 'Fakultet prirodoslovno matematičkih i dogojnih znanosti',
                'study' =>'Informatika',
                'type' => 'student',

            ],


        ];

         foreach ($users as $user)
             User::create($user);

    }
}
