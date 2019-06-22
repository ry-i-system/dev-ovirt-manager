<?php

use Illuminate\Database\Seeder;

class VmlistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = date("Y-m-d H:i:s");
        DB::table('vmlists')->insert([
            [
                'vm_id' => '1794cf11-b911-4108-9068-2d37c9e7d1eb',
                'vm_name' => 'jenkins',
                'vm_cpu' => 2,
                'vm_mem_size' => 2,
                'vm_os_type' => 'CentOS 7 64bit',
                'vm_vlan1_ipaddr' => '10.30.147.25',
                'vm_vlan2_ipaddr' => '192.168.2.12',
                'vm_comment' => '',
                'vm_created_at' => $today,
                'vm_updated_at' => NULL,
                'vm_deleted_at' => NULL,
                'vm_create_flag' => '0',
            ],
        ]);
    }
}
