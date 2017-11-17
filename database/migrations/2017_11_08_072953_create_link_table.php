<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('链接标题');
            $table->string('url')->comment('友情链接地址');
            $table->text('description')->comment('描述');
            $table->string('logo')->comment('友情链接logo');
            $table->tinyInteger('type')->comment('类型');
            $table->integer('order_num')->comment('排序')->default(1);
            $table->tinyInteger('status')->comment('状态')->default(1);
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
        Schema::dropIfExists('link');
    }
}
