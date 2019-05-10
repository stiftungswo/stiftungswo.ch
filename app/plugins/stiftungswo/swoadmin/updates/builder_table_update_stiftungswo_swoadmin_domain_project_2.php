<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStiftungswoSwoadminDomainProject2 extends Migration
{
    public function up()
    {
        Schema::table('stiftungswo_swoadmin_domain_project', function($table)
        {
            $table->integer('order');
        });
    }
    
    public function down()
    {
        Schema::table('stiftungswo_swoadmin_domain_project', function($table)
        {
            $table->dropColumn('order');
        });
    }
}
