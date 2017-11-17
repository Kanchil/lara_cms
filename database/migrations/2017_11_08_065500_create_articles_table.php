<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',255)->comment('文章标题');
            $table->string('short_title',255)->comment('文章副标题');
            $table->string('copy_from',200)->comment('文章来源');
            $table->string('author',100)->comment('文章作者');
            $table->string('keyword',200)->comment('关键字');
            $table->string('thumb_image',200)->comment('文章缩略图');
            $table->text('content')->comment('文章内容');
            $table->text('description')->comment('文章摘要');
            $table->integer('click_num')->comment('文章点击次数')->default(0);
            $table->integer('category_id')->comment('文章所属栏目id');
            $table->tinyInteger('status')->comment('状态')->default(1);
            $table->tinyInteger('type')->comment('文章类型 1 推荐 2 热门 3 独家')->default(0);
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
        Schema::dropIfExists('articles');
    }
}
