<?php namespace Netgen\Netgen\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateNetgenNetgenComplaint10 extends Migration
{
    public function up()
    {
        Schema::table('netgen_netgen_complaint', function($table)
        {
            $table->double('receipt', 10, 0);
        });
    }
    
    public function down()
    {
        Schema::table('netgen_netgen_complaint', function($table)
        {
            $table->dropColumn('receipt');
        });
    }
}
