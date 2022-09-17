<?php namespace Netgen\Netgen\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateNetgenNetgenComplaint12 extends Migration
{
    public function up()
    {
        Schema::table('netgen_netgen_complaint', function($table)
        {
            $table->renameColumn('receipt', 'receipt_id');
        });
    }
    
    public function down()
    {
        Schema::table('netgen_netgen_complaint', function($table)
        {
            $table->renameColumn('receipt_id', 'receipt');
        });
    }
}
