<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                'name' => 'Ivan',
                'email' => 'ivan@mail.com',
            ],
            [
                'name' => 'Jocka',
                'email' => 'jocka@mail.com',
            ],
            [
                'name' => 'Ljubomir',
                'email' => 'ljubomir@mail.com',
            ],
            [
                'name' => 'Mikac',
                'email' => 'mikac@mail.com',
            ],
            [
                'name' => 'Dusan',
                'email' => 'dusan@mail.com',
            ],
        ])->each(function ($user) {
            return User::query()->create(
                [
                    'name' => $user['name'],
                    'email' => $user['email']
                ], $user);
        });
    }
}
