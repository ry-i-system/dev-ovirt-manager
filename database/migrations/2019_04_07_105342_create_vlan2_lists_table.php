<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVlan2ListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vlan2_lists', function (Blueprint $table)
        {
            // VLAN2のIPアドレス
            $table->ipAddress('vlan2_ipaddr')->primary();
            // IPアドレスを使用中のサーバID
            $table->string('vm_id')->nullable();
            // IPアドレスを使用中のサーバ名
            $table->string('vm_name')->nullable();
            // IPアドレス状態フラグ
            // 0: サーバ作成時に割当済み
            // 1: Virtual IPとして割当済み（ロードバランサ／pgpoolなど）
            // 2: ネットワーク機器に割当済み
            // 3: プリンタに割当済み
            // 4: 未割当（使用可能）
            $table->integer('use_flag');
            // コメント
            $table->string('comment')->nullable();
            // 変更日時
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vlan2_lists');
    }
}
