<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['Administrator 1', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'male.png'],
            ['Administrator 2', 'admin2', 'admin2@gmail.com', 'c84258e9c39059a89ab77d846ddab909', 'female.png'],
        ];

        DB::table('users')->truncate();

        foreach ($users as $user) {
            DB::table('users')->insert([
                'name' => $user[0],
                'username' => $user[1],
                'email' => $user[2],
                'password' => $user[3],
                'avatar' => $user['4']
            ]);
        }
    }
}
