<?php

use Illuminate\Database\Seeder;

class Vlan2_listsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = date("Y-m-d H:i:s");
        for ($i = 0; $i < 256; $i++) {
            if ($i == 0 || $i == 255) {
                $use_flag = 2;
                if ($i == 0) {
                    $comment = 'Network Address';
                } elseif ($i == 255) {
                    $comment = 'Broadcast Address';
                }
            } else {
                $use_flag = 4;
                $comment = NULL;
            }
            DB::table('vlan2_lists')->insert([
                [
                    'vlan2_ipaddr' => '192.168.2.' . $i,
                    'vm_id' => NULL,
                    'vm_name' => NULL,
                    'use_flag' => $use_flag,
                    'comment' => $comment,
                    'updated_at' => $today,
                ],
            ]);
        }
    }
}
