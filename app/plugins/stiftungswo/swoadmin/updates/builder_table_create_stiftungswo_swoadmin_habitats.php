<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateStiftungswoSwoadminHabitats extends Migration
{
    public function up()
    {
        Schema::create('stiftungswo_swoadmin_habitats', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('stiftungswo_swoadmin_habitats');
    }
}
