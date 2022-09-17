<?php namespace Netgen\Netgen\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateNetgenNetgenComplaint9 extends Migration
{
    public function up()
    {
        Schema::table('netgen_netgen_complaint', function($table)
        {
            $table->dropColumn('receipt');
        });
    }
    
    public function down()
    {
        Schema::table('netgen_netgen_complaint', function($table)
        {
            $table->text('receipt')->nullable();
        });
    }
}
