<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStiftungswoSwoadminProcesses2 extends Migration
{
    public function up()
    {
        Schema::table('stiftungswo_swoadmin_processes', function($table)
        {
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::table('stiftungswo_swoadmin_processes', function($table)
        {
            $table->dropColumn('title');
        });
    }
}
