<?php namespace Netgen\Netgen\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateNetgenNetgenComplaint3 extends Migration
{
    public function up()
    {
        Schema::table('netgen_netgen_complaint', function($table)
        {
            $table->text('state_name')->nullable(false)->unsigned(false)->default(null)->change();
            $table->text('city')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('netgen_netgen_complaint', function($table)
        {
            $table->integer('state_name')->nullable(false)->unsigned()->default(null)->change();
            $table->integer('city')->nullable(false)->unsigned()->default(null)->change();
        });
    }
}
