<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(Vlan1_listsTableSeeder::class);
        // $this->call(Vlan2_listsTableSeeder::class);
        $this->call(VmlistsTableSeeder::class);
    }
}
