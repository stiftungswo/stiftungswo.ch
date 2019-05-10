<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStiftungswoSwoadminDomainProject3 extends Migration
{
    public function up()
    {
        Schema::table('stiftungswo_swoadmin_domain_project', function($table)
        {
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::table('stiftungswo_swoadmin_domain_project', function($table)
        {
            $table->dropColumn('id');
        });
    }
}
