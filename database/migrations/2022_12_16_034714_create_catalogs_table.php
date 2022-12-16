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

        Schema::create('catalogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug');
            $table->enum('content_type', ['post'])->default('post');
            $table->string('title');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
        Schema::create('post_catalog', function (Blueprint $table) {
            $table->bigInteger('catalog_id');
            $table->bigInteger('post_id');
            // $table->foreign('catalog_id')->references('id')->on('catalogs')->onDelete('cascade');
            // $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->primary(['catalog_id', 'post_id']);
            $table->index(['catalog_id', 'post_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_catalog');
        Schema::dropIfExists('catalogs');
    }
};
