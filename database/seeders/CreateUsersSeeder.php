<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@koperasi.com',
                'account_type' => '1',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@koperasi.com',
                'account_type' => '2',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'User',
                'email' => 'user@koperasi.com',
                'account_type' => '3',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
