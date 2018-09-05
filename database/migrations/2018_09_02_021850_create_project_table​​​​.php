<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable​​​​ extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->increments('id');
             // tiêu đề bài viết
            $table->string('title')->index();
             // ảnh thu nhỏ của bài viết
            $table->string('thumbnail')->nullable();
            // mô tả ngắn cho bài viết
            $table->mediumText('description')->nullable(); 
             // nội dung bài viết
            $table->longText('content')->nullable();

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
        //
    }
}
