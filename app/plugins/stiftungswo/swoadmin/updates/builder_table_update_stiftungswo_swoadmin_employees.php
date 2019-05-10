<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStiftungswoSwoadminEmployees extends Migration
{
    public function up()
    {
        Schema::rename('stiftungswo_swoadmin_employee', 'stiftungswo_swoadmin_employees');
    }
    
    public function down()
    {
        Schema::rename('stiftungswo_swoadmin_employees', 'stiftungswo_swoadmin_employee');
    }
}
