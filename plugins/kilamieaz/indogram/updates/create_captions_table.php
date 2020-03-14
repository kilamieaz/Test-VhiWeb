<?php

namespace Kilamieaz\Indogram\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateCaptionsTable extends Migration
{
    public function up()
    {
        Schema::create('kilamieaz_indogram_captions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kilamieaz_indogram_captions');
    }
}
