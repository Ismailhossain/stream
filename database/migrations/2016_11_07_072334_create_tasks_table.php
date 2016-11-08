<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function(Blueprint $table)
        {
            $table->increments('id')->unsigned();
            $table->string('title')->unique();
            $table->integer('status')->default(0);
            $table->timestamps();
        });


        Schema::create('tasks', function(Blueprint $table)
        {
            $table->increments('id')->unsigned();
            $table->string('title')->unique();
            $table->integer('status')->default(0);
            $table->integer('parent_id')->default(0);

            $table->timestamps();
        });




//        Schema::create('parent_sub', function(Blueprint $table)
//        {
//            $table->increments('id');
//            $table->integer('parent_id')->unsigned()->default(0);
//            $table->integer('sub_id')->unsigned()->default(0);
//            $table->integer('parent_status')->unsigned()->default(0);
//            $table->integer('sub_status')->unsigned()->default(0);
//
//            $table->foreign('parent_id')->references('id')->on('parent_tasks')
//                ->onUpdate('cascade')->onDelete('cascade');
//
//            $table->foreign('sub_id')->references('id')->on('tasks')
//                ->onUpdate('cascade')->onDelete('cascade');
//
//            $table->foreign('parent_status')->references('status')->on('parent_tasks')
//                ->onUpdate('cascade')->onDelete('cascade');
//
//            $table->foreign('sub_status')->references('status')->on('tasks')
//                ->onUpdate('cascade')->onDelete('cascade');
//            $table->timestamps();
//        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tasks');
        Schema::drop('parents');
//        Schema::drop('parent_sub');
    }
}
