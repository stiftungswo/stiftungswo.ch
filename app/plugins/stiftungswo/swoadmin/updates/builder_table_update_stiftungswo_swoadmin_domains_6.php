<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStiftungswoSwoadminDomains6 extends Migration
{
    public function up()
    {
        Schema::table('stiftungswo_swoadmin_domains', function($table)
        {
            $table->string('image');
        });
    }
    
    public function down()
    {
        Schema::table('stiftungswo_swoadmin_domains', function($table)
        {
            $table->dropColumn('image');
        });
    }
}
