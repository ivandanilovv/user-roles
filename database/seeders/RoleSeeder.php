<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'name' => 'Admin',
            ],
            [
                'name' => 'Moderator',
            ],
            [
                'name' => 'Superadmin',
            ],
            [
                'name' => 'Basic',
            ],
        ])->each(function ($role) {
            return Role::query()->create(
                ['name' => $role['name']],
                $role);
        });
    }
}
