<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStiftungswoSwoadminProjects5 extends Migration
{
    public function up()
    {
        Schema::table('stiftungswo_swoadmin_projects', function($table)
        {
            $table->dropColumn('domain_id');
            $table->dropColumn('is_showed_on_domain');
        });
    }
    
    public function down()
    {
        Schema::table('stiftungswo_swoadmin_projects', function($table)
        {
            $table->integer('domain_id')->nullable();
            $table->boolean('is_showed_on_domain')->default(0);
        });
    }
}
