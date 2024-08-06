<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Spatie\Permission\Models\Role;

class ModelHasRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roleAssignments = [
            ['username' => 'oshodi.akinwale', 'role' => 'superadmin'],
            ['username' => 'examandrecords', 'role' => 'administrator'],
            ['username' => 'daramola.babatunde', 'role' => 'administrator'],
            ['username' => 'adams.olumide', 'role' => 'administrator'],
            ['username' => 'igbekele.emmanuel', 'role' => 'administrator'],
        ];

        foreach ($roleAssignments as $assignment) {
            $user = User::where('username', $assignment['username'])->first();
            $role = Role::where('name', $assignment['role'])->first();

            if ($user && $role) {
                DB::table('model_has_roles')->insert([
                    'role_id' => $role->id,
                    'model_type' => 'App\Models\User',
                    'model_id' => $user->id,
                ]);
            }
        }
    }
}
