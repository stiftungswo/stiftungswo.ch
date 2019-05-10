<?php namespace Stiftungswo\Swoadmin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStiftungswoSwoadminProject extends Migration
{
    public function up()
    {
        Schema::table(
            'stiftungswo_swoadmin_project',
            function ($table) {
                $table->integer('employee_id');
            }
        );
    }


    public function down()
    {
        Schema::table(
            'stiftungswo_swoadmin_project',
            function ($table) {
                $table->dropColumn('employee_id');
            }
        );
    }
}
