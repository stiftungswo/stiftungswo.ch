<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateStiftungswoSwoadminEmployees extends Migration
{
    public function up()
    {
        Schema::create(
            'stiftungswo_swoadmin_employees',
            function ($table) {
                $table->engine = 'InnoDB';
                $table->increments('id');
                $table->string('first_name')->nullable();
                $table->string('last_name')->nullable();
                $table->string('slug', 255);
                $table->string('image');
                $table->string('email');
                $table->date('birthyear')->nullable();
                $table->string('education');
                $table->text('motivation');
            }
        );
    }

    public function down()
    {
        Schema::dropIfExists('stiftungswo_swoadmin_employees');
    }
}
