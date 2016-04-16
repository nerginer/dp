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
         //   $table -> integer('author_id') -> unsigned() -> default(0);
         //   $table->foreign('author_id')
        //  ->references('id')->on('users')
        //  ->onDelete('cascade');
        
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('eagleFile');
            $table->string('thumbnail');
            $table->string('svgFile');
            $table->string('pdf');
            $table->text('description');
            $table->string('license');
            $table->string('productUsedIn');
            
            
            $table->timestamps();
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
