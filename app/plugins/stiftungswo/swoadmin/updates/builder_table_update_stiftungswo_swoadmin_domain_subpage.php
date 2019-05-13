<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStiftungswoSwoadminDomainSubpage extends Migration
{
    public function up()
    {
        Schema::table('stiftungswo_swoadmin_domain_subpage', function($table)
        {
            $table->smallInteger('title');
            $table->increments('id')->unsigned(false)->change();
            $table->string('slug')->change();
        });
    }
    
    public function down()
    {
        Schema::table('stiftungswo_swoadmin_domain_subpage', function($table)
        {
            $table->dropColumn('title');
            $table->increments('id')->unsigned()->change();
            $table->string('slug', 191)->change();
        });
    }
}
