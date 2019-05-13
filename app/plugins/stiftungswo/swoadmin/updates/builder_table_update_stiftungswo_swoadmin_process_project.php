<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStiftungswoSwoadminProcessProject extends Migration
{
    public function up()
    {
        Schema::table('stiftungswo_swoadmin_process_project', function($table)
        {
            $table->renameColumn('is_visible_on_domain', 'is_visible_on_process');
        });
    }
    
    public function down()
    {
        Schema::table('stiftungswo_swoadmin_process_project', function($table)
        {
            $table->renameColumn('is_visible_on_process', 'is_visible_on_domain');
        });
    }
}
