<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug');
            $table->string('thumbnail')->nullable();
            $table->string('title');
            $table->text('content_short')->nullable();
            $table->longText('content');
            $table->enum('content_type',['page','post'])->default('post');
            $table->dateTime('published_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->enum('published_type', ['public', 'private', 'password'])->default('public');
            $table->boolean('is_draft')->default(false);
            $table->boolean('is_active')->default(true);
            $table->string('layout')->default('');
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
        Schema::dropIfExists('posts');
    }
};
