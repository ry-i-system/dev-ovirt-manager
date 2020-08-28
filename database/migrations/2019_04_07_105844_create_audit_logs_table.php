<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audit_logs', function (Blueprint $table)
        {
            // 自動採番ID
            $table->bigIncrements('id')->nullable();
            // 操作ユーザ名
            $table->string('user_name')->nullable();
            // 操作内容
            $table->string('audit_detail')->nullable();
            // 操作状態フラグ
            // 0: 操作完了
            // 1: 操作処理中
            // 2: 操作失敗
            $table->integer('audit_flag')->nullable();
            // 操作開始日時
            $table->timestamp('start_at')->nullable();
            // 操作完了日時
            $table->timestamp('end_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audit_logs');
    }
}
