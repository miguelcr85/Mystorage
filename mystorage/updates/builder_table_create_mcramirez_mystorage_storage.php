<?php namespace Mcramirez\Mystorage\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateMcramirezMystorageStorage extends Migration
{
    public function up()
    {
        Schema::create('mcramirez_mystorage_storage', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('code');
            $table->text('items');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mcramirez_mystorage_storage');
    }
}
