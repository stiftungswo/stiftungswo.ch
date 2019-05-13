<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStiftungswoSwoadminDomainSubpage4 extends Migration
{
    public function up()
    {
        Schema::table('stiftungswo_swoadmin_domain_subpage', function($table)
        {
            $table->string('title', 10)->nullable(false)->unsigned(false)->default(null)->change();
            $table->string('showcase_image')->change();
        });
    }
    
    public function down()
    {
        Schema::table('stiftungswo_swoadmin_domain_subpage', function($table)
        {
            $table->smallInteger('title')->nullable(false)->unsigned(false)->default(null)->change();
            $table->string('showcase_image', 191)->change();
        });
    }
}
