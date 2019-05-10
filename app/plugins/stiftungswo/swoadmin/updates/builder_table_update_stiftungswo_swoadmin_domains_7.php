<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStiftungswoSwoadminDomains7 extends Migration
{
    public function up()
    {
        Schema::table('stiftungswo_swoadmin_domains', function($table)
        {
            $table->text('showcase_text');
            $table->renameColumn('image', 'showcase_image');
        });
    }
    
    public function down()
    {
        Schema::table('stiftungswo_swoadmin_domains', function($table)
        {
            $table->dropColumn('showcase_text');
            $table->renameColumn('showcase_image', 'image');
        });
    }
}
