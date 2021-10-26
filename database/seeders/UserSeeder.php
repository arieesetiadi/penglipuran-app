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
            [
                'Sutha Pramana',
                'admin@gmail.com',
                '21232f297a57a5a743894a0e4a801fc3',
                'Pria'
            ],
        ];

        DB::table('users')->truncate();

        foreach ($users as $user) {
            DB::table('users')->insert([
                'name' => $user[0],
                'email' => $user[1],
                'password' => $user[2],
                'jenis_kelamin' => $user[3]
            ]);
        }
    }
}
