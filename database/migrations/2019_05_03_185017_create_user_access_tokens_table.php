<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAccessTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_access_tokens', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('用户ID');
            $table->string('access_token',255)->comment("token");
            $table->char('access_token_key',16)->comment("token key");
            $table->ipAddress('ip')->comment("登录IP");
            $table->string('platform',64)->comment("登录终端类型");
            $table->string('imei')->nullable()->comment("如果设备存在多个身份码，则以“,”字符分割拼接，如“862470039452950,862470039452943”。");
            $table->string('uuid')->nullable()->comment("如果无法获取设备imei则使用设备wifi的mac地址");
            $table->string('user_agent')->comment("chrome user_agent");
            $table->tinyInteger('status')->comment("chrome user_agent");
            $table->string('ClientInfo')->comment("第三方推送渠道客户端标识");
            $table->integer('expire_time')->comment("到期时间");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_access_tokens');
    }
}
