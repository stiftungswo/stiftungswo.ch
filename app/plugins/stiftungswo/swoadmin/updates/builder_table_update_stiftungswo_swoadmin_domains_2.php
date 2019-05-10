<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStiftungswoSwoadminDomains2 extends Migration
{
    public function up()
    {
        Schema::table('stiftungswo_swoadmin_domains', function($table)
        {
            $table->renameColumn('name', 'title');
        });
    }
    
    public function down()
    {
        Schema::table('stiftungswo_swoadmin_domains', function($table)
        {
            $table->renameColumn('title', 'name');
        });
    }
}
