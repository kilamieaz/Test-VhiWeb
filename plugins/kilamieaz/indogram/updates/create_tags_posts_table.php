<?php

namespace Watchlearn\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateTagsPostsTable extends Migration
{
    public function up()
    {
        Schema::create('kilamieaz_indogram_tags_posts', function ($table) {
            $table->engine = 'InnoDB';
            $table->integer('post_id');
            $table->integer('tag_id');
            $table->primary(['post_id', 'tag_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('kilamieaz_indogram_tags_posts');
    }
}
