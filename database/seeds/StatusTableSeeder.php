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

        Status::create([
            'id'            => 1,
            'title_id'            => 0,
            'title'          => 'IN PROGRESS'

        ]);
        Status::create([
            'id'            => 2,
            'title_id'            => 1,
            'title'          => 'DONE'



        ]);
        Status::create([
            'id'            => 3,
            'title_id'            => 2,
            'title'          => 'COMPLETE'



        ]);

    }
}
