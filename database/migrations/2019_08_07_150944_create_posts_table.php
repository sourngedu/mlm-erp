<?php
//database\migrations\xxxx_xx_xx_xxxxxx_create_posts_table.php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
					$table->increments('id');
					$table->string('title');
					$table->text('body');
					$table->timestamps();
        });
    }

    public function down()
    {
			Schema::dropIfExists('posts');
    }
}
