<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


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
                'id' => 1,
                'email' => 'huyenntt.intern@gmail.com',
                'email_verified_at'	=> null,
                'password' => Hash::make('123456'),
            ],
            ];
        foreach ($users as $user)
        //DB::table('$users')->insert($user);
        DB::updateOrCreate(['id' => $user['id']], $user);
    }
}
