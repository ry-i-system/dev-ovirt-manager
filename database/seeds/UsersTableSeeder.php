<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = date("Y-m-d H:i:s");
        DB::table('users')->insert([
            [
                'name' => 'binsan',
                'email' => 'ryo.yasumoto@ry-i-system.com',
                'email_verified_at' => $today,
                'password' => bcrypt('!Q2w3e4r5t6y'),
                'remember_token' => Str::random(10),
                'created_at' => $today,
                'updated_at' => $today,
            ]
        ]);
    }
}
