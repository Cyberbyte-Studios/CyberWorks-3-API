<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $config = config('laravel-permission.table_names');        
        Schema::table($config['roles'], function ($table) {
            $table->string('displayName');
            $table->string('descriptionShort');            
        });
        Schema::table($config['permissions'], function ($table) {
            $table->string('displayName');
            $table->string('descriptionShort');            
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
