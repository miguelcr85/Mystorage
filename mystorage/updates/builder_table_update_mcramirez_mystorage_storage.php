<?php namespace Mcramirez\Mystorage\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateMcramirezMystorageStorage extends Migration
{
    public function up()
    {
        Schema::table('mcramirez_mystorage_storage', function($table)
        {
            $table->text('items')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('mcramirez_mystorage_storage', function($table)
        {
            $table->text('items')->nullable(false)->change();
        });
    }
}
