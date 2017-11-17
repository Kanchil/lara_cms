<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menucategory', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100)->comment('菜单名称');
            $table->text('description')->comment('菜单描述');
            $table->integer('parent_id')->comment('菜单父级id');
            $table->string('module')->comment('所属模块');
            $table->string('action')->comment('对应路由');
            $table->tinyInteger('status')->comment('状态')->default(1);
            $table->integer('order_num')->comment('排序')->default(50);
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
        Schema::dropIfExists('menucategory');
    }
}
