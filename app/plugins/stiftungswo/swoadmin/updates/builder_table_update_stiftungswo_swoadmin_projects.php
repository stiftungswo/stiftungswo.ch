<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStiftungswoSwoadminProjects extends Migration
{
    public function up()
    {
        Schema::rename('stiftungswo_swoadmin_project', 'stiftungswo_swoadmin_projects');
    }
    
    public function down()
    {
        Schema::rename('stiftungswo_swoadmin_projects', 'stiftungswo_swoadmin_project');
    }
}
