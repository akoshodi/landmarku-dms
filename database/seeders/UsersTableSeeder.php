<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'username' => 'examandrecords',
                'last_name' => 'EXAMS',
                'first_name' => 'RECORDS',
                'email' => 'examandrecords@lu.edu.ng',
            ],
            [
                'username' => 'daramola.babatunde',
                'last_name' => 'Daramola',
                'first_name' => 'Babatunde',
                'email' => 'daramola.babatunde@lmu.edu.ng',
            ],
            [
                'username' => 'adams.olumide',
                'last_name' => 'Adams',
                'first_name' => 'Olumide',
                'email' => 'adams.olumide@lmu.edu.ng',
            ],
            [
                'username' => 'dcsis',
                'last_name' => 'DIRECTOR',
                'first_name' => 'CSIS',
                'email' => 'dcsis@lmu.edu.ng',
            ],
            [
                'username' => 'igbekele.emmanuel',
                'last_name' => 'Igbekele',
                'first_name' => 'Emmanuel',
                'email' => 'igbekele.emmanuel@lu.edu.ng',
            ],
        ];

        foreach ($users as $user) {
            DB::table('users')->insert([
                'username' => $user['username'],
                'last_name' => $user['last_name'],
                'first_name' => $user['first_name'],
                'email' => $user['email'],
                'password' => Hash::make('password'), // You might want to change this
                'is_staff' => 1,
                'status_id' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
