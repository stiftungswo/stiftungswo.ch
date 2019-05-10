<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStiftungswoSwoadminDomains5 extends Migration
{
    public function up()
    {
        Schema::table('stiftungswo_swoadmin_domains', function($table)
        {
            $table->string('slug', 255)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('stiftungswo_swoadmin_domains', function($table)
        {
            $table->smallInteger('slug')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
