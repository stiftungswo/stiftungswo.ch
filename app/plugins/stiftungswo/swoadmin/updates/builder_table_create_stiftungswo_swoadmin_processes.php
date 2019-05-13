<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateStiftungswoSwoadminProcess extends Migration
{
    public function up()
    {
        Schema::create('stiftungswo_swoadmin_processes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('showcase_image');
            $table->text('showcase_text');
            $table->text('content');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('stiftungswo_swoadmin_processes');
    }
}
