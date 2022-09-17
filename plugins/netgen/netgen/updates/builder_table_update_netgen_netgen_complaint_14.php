<?php namespace Netgen\Netgen\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateNetgenNetgenComplaint14 extends Migration
{
    public function up()
    {
        Schema::table('netgen_netgen_complaint', function($table)
        {
            $table->text('receipt')->nullable(false)->unsigned(false)->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('netgen_netgen_complaint', function($table)
        {
            $table->binary('receipt')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
