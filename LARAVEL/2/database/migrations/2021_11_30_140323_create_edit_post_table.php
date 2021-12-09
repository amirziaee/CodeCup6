<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edit_post', function (Blueprint $table) {
            // TODO: Implement
            $table->bigInteger('edit_id')->unsigned()->index();
            $table->bigInteger('post_id')->unsigned()->index();
            $table->foreign('edit_id')->references('id')->on('edits')->onDelete('cascade')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('edit_post');
    }
}
