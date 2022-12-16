<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug');
            $table->string('title');
            $table->timestamps();
        });
        Schema::create('post_tag', function (Blueprint $table) {
            $table->bigInteger('tag_id');
            $table->bigInteger('post_id');
            // $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
            // $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->primary(['tag_id', 'post_id']);
            $table->index(['tag_id', 'post_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tag');
        Schema::dropIfExists('tags');
    }
};
