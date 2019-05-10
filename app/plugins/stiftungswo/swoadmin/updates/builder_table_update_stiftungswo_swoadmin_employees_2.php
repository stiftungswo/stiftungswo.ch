<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStiftungswoSwoadminEmployees2 extends Migration
{
    public function up()
    {
        Schema::table('stiftungswo_swoadmin_employees', function($table)
        {
            $table->string('slug', 255);
        });
    }
    
    public function down()
    {
        Schema::table('stiftungswo_swoadmin_employees', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
