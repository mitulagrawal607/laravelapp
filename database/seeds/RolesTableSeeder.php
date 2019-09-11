<?php

use App\User;
use Illuminate\Database\Seeder;
use jeremykenedy\LaravelRoles\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Add Roles
         *
         */
        if (Role::where('name', '=', 'Admin')->first() === null) {
            $adminRole = Role::create([
                'name'        => 'Admin',
                'slug'        => 'admin',
                'description' => 'Admin Role',
                'level'       => 5,
            ]);
        }

        if (Role::where('name', '=', 'Teacher')->first() === null) {
            $userRole = Role::create([
                'name'        => 'Teacher',
                'slug'        => 'teacher',
                'description' => 'Teacher Role',
                'level'       => 1,
            ]);
        }

        if (Role::where('name', '=', 'Student')->first() === null) {
            $userRole = Role::create([
                'name'        => 'Student',
                'slug'        => 'student',
                'description' => 'Student Role',
                'level'       => 0,
            ]);
        }
    }
}
