<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dps', function (Blueprint $table) {
            $table->increments('id');
        
        
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('eagleFile');
            $table->string('thumbnail');
            $table->string('svgFile');
            $table->string('pdf');
            $table->text('description');
            $table->string('license');
            $table->string('productUsedIn');
            
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();
            
            $table->timestamps();
            
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
                
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dps');
    }
}
