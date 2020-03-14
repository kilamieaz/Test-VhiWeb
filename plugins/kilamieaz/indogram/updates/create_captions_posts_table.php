<?php

namespace Watchlearn\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCaptionsPostsTable extends Migration
{
    public function up()
    {
        Schema::create('kilamieaz_indogram_captions_posts', function ($table) {
            $table->engine = 'InnoDB';
            $table->integer('post_id');
            $table->integer('caption_id');
            $table->primary(['post_id', 'caption_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('kilamieaz_indogram_captions_posts');
    }
}
