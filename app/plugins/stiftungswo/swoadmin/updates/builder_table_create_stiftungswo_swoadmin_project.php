<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateStiftungswoSwoadminProject extends Migration
{
    public function up()
    {
        Schema::create(
            'stiftungswo_swoadmin_project',
            function ($table) {
                $table->engine = 'InnoDB';
                $table->increments('id');
                $table->string('title');
            }
        );
    }


    public function down()
    {
        Schema::dropIfExists('stiftungswo_swoadmin_project');
    }
}
