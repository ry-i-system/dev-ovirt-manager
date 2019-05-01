<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVmlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vmlists', function (Blueprint $table)
        {
            // oVirt側から払い出されるID (サーバ作成が完了するまではnull)
            $table->string('vm_id')->nullable();
            // サーバ名
            $table->string('vm_name')->primary();
            // vCPU
            $table->integer('vm_cpu');
            // メモリGB
            $table->float('vm_mem_size', 3, 1);
            // OS種別
            $table->string('vm_os_type');
            // NIC（VLAN1）のIPアドレス
            $table->ipAddress('vm_vlan1_ipaddr')->unique();
            // NIC（VLAN2）のIPアドレス
            $table->ipAddress('vm_vlan2_ipaddr')->unique();
            // コメント
            $table->string('vm_comment')->nullable();
            // サーバ作成日時
            $table->timestamp('vm_created_at')->nullable();
            // スペック変更日時
            $table->timestamp('vm_updated_at')->nullable();
            // サーバ削除日時
            $table->timestamp('vm_deleted_at')->nullable();
            // サーバ状態フラグ
            // 0: 作成済み
            // 1: 処理中
            // 2: 削除済み
            $table->integer('vm_create_flag')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vmlists');
    }
}
