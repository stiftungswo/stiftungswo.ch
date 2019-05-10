<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStiftungswoSwoadminProjects8 extends Migration
{
    public function up()
    {
        Schema::table('stiftungswo_swoadmin_projects', function($table)
        {
            $table->renameColumn('is_showed_on_employee', 'is_visible_on_employee');
            $table->renameColumn('image', 'showcase_image');
        });
    }
    
    public function down()
    {
        Schema::table('stiftungswo_swoadmin_projects', function($table)
        {
            $table->renameColumn('is_visible_on_employee', 'is_showed_on_employee');
            $table->renameColumn('showcase_image', 'image');
        });
    }
}
