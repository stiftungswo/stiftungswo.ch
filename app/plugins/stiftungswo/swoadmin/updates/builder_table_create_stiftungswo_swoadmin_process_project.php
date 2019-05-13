<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateStiftungswoSwoadminProcessProject extends Migration
{
    public function up()
    {
        Schema::create('stiftungswo_swoadmin_process_project', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('process_id');
            $table->integer('project_id');
            $table->boolean('is_visible_on_domain');
            $table->integer('order');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('stiftungswo_swoadmin_process_project');
    }
}
