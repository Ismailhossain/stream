<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusTableSeeder extends Seeder
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
        Status::create([
            'id'            => 1,
            'title'          => 'IN PROGRESS'

        ]);
        Status::create([
            'id'            => 2,
            'title'          => 'DONE'



        ]);
        Status::create([
            'id'            => 3,
            'title'          => 'COMPLETE'



        ]);

    }
}
