<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStiftungswoSwoadminProjects4 extends Migration
{
    public function up()
    {
        Schema::table('stiftungswo_swoadmin_projects', function($table)
        {
            $table->boolean('is_showed_on_employee')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('stiftungswo_swoadmin_projects', function($table)
        {
            $table->dropColumn('is_showed_on_employee');
        });
    }
}
