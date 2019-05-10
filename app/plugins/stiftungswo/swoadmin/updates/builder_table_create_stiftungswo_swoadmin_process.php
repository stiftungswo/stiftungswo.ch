<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateStiftungswoSwoadminProcess extends Migration
{
    public function up()
    {
        Schema::create('stiftungswo_swoadmin_process', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('stiftungswo_swoadmin_process');
    }
}
