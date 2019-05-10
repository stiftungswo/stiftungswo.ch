<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStiftungswoSwoadminDomains extends Migration
{
    public function up()
    {
        Schema::rename('stiftungswo_swoadmin_domain', 'stiftungswo_swoadmin_domains');
    }
    
    public function down()
    {
        Schema::rename('stiftungswo_swoadmin_domains', 'stiftungswo_swoadmin_domain');
    }
}
