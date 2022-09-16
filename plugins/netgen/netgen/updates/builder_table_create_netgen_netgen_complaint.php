<?php namespace Netgen\Netgen\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateNetgenNetgenComplaint extends Migration
{
    public function up()
    {
        Schema::create('netgen_netgen_complaint', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name');
            $table->text('email');
            $table->text('contact');
            $table->integer('state_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->text('complaint_type');
            $table->text('receipt')->nullable();
            $table->text('message');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('netgen_netgen_complaint');
    }
}
