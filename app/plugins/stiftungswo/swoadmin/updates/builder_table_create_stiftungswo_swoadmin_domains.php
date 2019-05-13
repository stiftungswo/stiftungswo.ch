<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateStiftungswoSwoadminDomains extends Migration
{
    public function up()
    {
        Schema::create(
            'stiftungswo_swoadmin_domains',
            function ($table) {
                $table->engine = 'InnoDB';
                $table->increments('id');
                $table->integer('employee_id');
                $table->string('title');
                $table->string('slug');
                $table->integer('order');
                $table->boolean('is_visible_on_employee');
                $table->string('showcase_image');
                $table->text('showcase_text');
                $table->text('content');
            }
        );
    }


    public function down()
    {
        Schema::dropIfExists('stiftungswo_swoadmin_domains');
    }
}
