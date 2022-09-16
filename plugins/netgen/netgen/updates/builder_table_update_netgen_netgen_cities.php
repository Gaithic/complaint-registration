<?php namespace Netgen\Netgen\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateNetgenNetgenCities extends Migration
{
    public function up()
    {
        Schema::rename('netgen_netgen_district', 'netgen_netgen_cities');
    }
    
    public function down()
    {
        Schema::rename('netgen_netgen_cities', 'netgen_netgen_district');
    }
}
