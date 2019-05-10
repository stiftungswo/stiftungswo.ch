<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStiftungswoSwoadminDomainProject extends Migration
{
    public function up()
    {
        Schema::table('stiftungswo_swoadmin_domain_project', function($table)
        {
            $table->boolean('is_visible_on_domain')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('stiftungswo_swoadmin_domain_project', function($table)
        {
            $table->dropColumn('is_visible_on_domain');
        });
    }
}
