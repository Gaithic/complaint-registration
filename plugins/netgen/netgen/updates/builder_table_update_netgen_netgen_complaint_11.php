<?php namespace Netgen\Netgen\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateNetgenNetgenComplaint11 extends Migration
{
    public function up()
    {
        Schema::table('netgen_netgen_complaint', function($table)
        {
            $table->binary('receipt')->default('nul')->change();
        });
    }
    
    public function down()
    {
        Schema::table('netgen_netgen_complaint', function($table)
        {
            $table->binary('receipt')->default(null)->change();
        });
    }
}
