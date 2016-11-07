<?php

use Illuminate\Database\Seeder;
use App\Task;


class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::environment() === 'production') {
            exit('Lets stop');
        }
        Task::create([
            'id'            => 1,
            'title'          => 'Task A'

        ]);
        Task::create([
            'id'            => 2,
            'title'          => 'Task B'



        ]);
        Task::create([
            'id'            => 3,
            'title'          => 'Task C'



        ]);
        Task::create([
            'id'            => 4,
            'title'          => 'Task D'



        ]);
        Task::create([
            'id'            => 5,
            'title'          => 'Task E'



        ]);

        Task::create([
        'id'            => 6,
        'title'          => 'Task F'



    ]);

    }
}
