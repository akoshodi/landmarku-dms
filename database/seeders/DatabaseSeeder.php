<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'username' => 'oshodi.akinwale',
            'last_name' => 'Oshodi',
            'first_name' => 'Akinwale',
            'email' => 'oshodi.akinwale@lmu.edu.ng',
            'password' => env('DEFAULT_SEED_USER'),
            'domain' => 'default',
            'is_staff' => true,
            'guid' => '31313131-3131-3131-3130-303131353737',
        ]);

        $this->call(UsersTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ModelHasRolesSeeder ::class);
    }

}
