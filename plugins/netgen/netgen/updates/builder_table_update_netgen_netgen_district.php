<?php namespace Netgen\Netgen\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateNetgenNetgenDistrict extends Migration
{
    public function up()
    {
        Schema::table('netgen_netgen_district', function($table)
        {
            $table->text('city');
            $table->integer('state_id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('netgen_netgen_district', function($table)
        {
            $table->dropColumn('city');
            $table->dropColumn('state_id');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
}
