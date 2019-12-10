<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        if (\Illuminate\Support\Facades\DB::table('users')->count() == 0) {
            \Illuminate\Support\Facades\DB::table('users')->insert(
                [
                    'login' => 'briryl',
                    'password' => md5('bbb798490bbb'),
                ]);

        }
    }
}
