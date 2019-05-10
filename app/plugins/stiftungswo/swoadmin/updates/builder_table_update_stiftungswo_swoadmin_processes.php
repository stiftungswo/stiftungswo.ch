<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStiftungswoSwoadminProcesses extends Migration
{
    public function up()
    {
        Schema::rename('stiftungswo_swoadmin_process', 'stiftungswo_swoadmin_processes');
    }
    
    public function down()
    {
        Schema::rename('stiftungswo_swoadmin_processes', 'stiftungswo_swoadmin_process');
    }
}
