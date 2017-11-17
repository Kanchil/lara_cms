<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Support\Facades\DB;

class CreateAdDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',255)->comment('广告标题');
            $table->text('content')->comment('广告内容');
            $table->string('thumb_image')->comment('广告图片');
            $table->string('url')->comment('广告链接');
            $table->tinyInteger('status')->comment('状态')->default(1);
            $table->integer('order_num')->comment('排序')->default(1);
            $table->integer('aid')->comment('所属广告id');
            $table->time('start_time')->comment('广告起始时间');
            $table->time('end_time')->comment('广告结束时间');
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
        Schema::dropIfExists('ad_detail');
    }
}
