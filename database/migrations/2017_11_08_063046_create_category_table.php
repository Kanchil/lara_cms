<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100)->comment('栏目名称');
            $table->string('keyword',200)->comment('栏目关键字');
            $table->text('description')->comment('栏目描述');
            $table->integer('parent_id')->comment('栏目父id');
            $table->tinyInteger('status')->comment('状态')->default(1);
            $table->integer('order_num')->comment('排序')->default(50);
            $table->string('thumb_image')->comment('栏目缩略图');
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
        Schema::dropIfExists('category');
    }
}
