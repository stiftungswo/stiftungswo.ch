<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateStiftungswoSwoadminEmployee extends Migration
{
    public function up()
    {
        Schema::create(
            'stiftungswo_swoadmin_employee',
            function ($table) {
                $table->engine = 'InnoDB';
                $table->increments('id');
                $table->string('first_name')->nullable();
                $table->string('last_name')->nullable();
            }
        );
    }

    public function down()
    {
        Schema::dropIfExists('stiftungswo_swoadmin_employee');
    }
}
