<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStiftungswoSwoadminDomainSubpage3 extends Migration
{
    public function up()
    {
        Schema::table('stiftungswo_swoadmin_domain_subpage', function($table)
        {
            $table->string('showcase_image');
        });
    }
    
    public function down()
    {
        Schema::table('stiftungswo_swoadmin_domain_subpage', function($table)
        {
            $table->dropColumn('showcase_image');
        });
    }
}
