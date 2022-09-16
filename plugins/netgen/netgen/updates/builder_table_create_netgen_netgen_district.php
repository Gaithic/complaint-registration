<?php namespace Netgen\Netgen\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateNetgenNetgenDistrict extends Migration
{
    public function up()
    {
        Schema::create('netgen_netgen_district', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('netgen_netgen_district');
    }
}
