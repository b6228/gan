<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Items extends Migration
{
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');//商品ＩＤ
            $table->string('name');//商品名
            $table->integer('price');//値段
            $table->string('URL');//画像
            $table->string('TIP');//ジャンル

        });
    }

    public function down()
    {
        Schema::dropIfExists('items');
    }
}