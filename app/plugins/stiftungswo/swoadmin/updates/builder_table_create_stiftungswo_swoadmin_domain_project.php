<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateStiftungswoSwoadminDomainProject extends Migration
{
    public function up()
    {
        Schema::create('stiftungswo_swoadmin_domain_project', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('domain_id');
            $table->smallInteger('project_id');
            $table->primary(['domain_id', 'project_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('stiftungswo_swoadmin_domain_project');
    }
}
