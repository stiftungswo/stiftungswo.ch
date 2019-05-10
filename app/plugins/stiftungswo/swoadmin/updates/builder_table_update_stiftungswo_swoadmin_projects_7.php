<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStiftungswoSwoadminProjects7 extends Migration
{
    public function up()
    {
        Schema::table('stiftungswo_swoadmin_projects', function($table)
        {
            $table->text('content');
        });
    }
    
    public function down()
    {
        Schema::table('stiftungswo_swoadmin_projects', function($table)
        {
            $table->dropColumn('content');
        });
    }
}
