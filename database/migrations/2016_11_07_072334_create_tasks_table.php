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
        Schema::create('maintasks', function(Blueprint $table)
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




        Schema::create('maintask_task', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('task_id')->unsigned()->default(0);
            $table->integer('maintask_id')->unsigned()->default(0);



            $table->foreign('maintask_id')->references('id')->on('maintasks')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('task_id')->references('id')->on('tasks')
                ->onUpdate('cascade')->onDelete('cascade');

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
        Schema::drop('maintasks');
        Schema::drop('tasks');
        Schema::drop('maintask_task');
    }
}
