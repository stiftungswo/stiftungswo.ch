<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateStiftungswoSwoadminDomainDomainSubpage extends Migration
{
    public function up()
    {
        Schema::create('stiftungswo_swoadmin_domain_domain_subpage', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->integer('domain_id');
            $table->integer('domain_subpage_id');
            $table->integer('order');
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('stiftungswo_swoadmin_domain_domain_subpage');
    }
}
