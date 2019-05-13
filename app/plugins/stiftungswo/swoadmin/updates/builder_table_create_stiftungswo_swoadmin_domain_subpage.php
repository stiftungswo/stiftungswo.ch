<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateStiftungswoSwoadminDomainSubpage extends Migration
{
    public function up()
    {
        Schema::create('stiftungswo_swoadmin_domain_subpage', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('domain_id');
            $table->string('title');
            $table->string('slug');
            $table->string('showcase_image');
            $table->text('showcase_text');
            $table->text('content');
            $table->integer('order');
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('stiftungswo_swoadmin_domain_subpage');
    }
}
