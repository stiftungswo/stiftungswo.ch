<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStiftungswoSwoadminHabitats extends Migration
{
    public function up()
    {
        Schema::table('stiftungswo_swoadmin_habitats', function($table)
        {
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::table('stiftungswo_swoadmin_habitats', function($table)
        {
            $table->dropColumn('title');
        });
    }
}
