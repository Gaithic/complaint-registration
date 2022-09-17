<?php namespace Netgen\Netgen\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateNetgenNetgenComplaintStateName extends Migration
{
    public function up()
    {
        Schema::create('netgen_netgen_complaint_state_name', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('state_name')->unsigned();
            $table->primary(['state_name']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('netgen_netgen_complaint_state_name');
    }
}
