<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaintaskTask extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'maintask_task';

    /*
    |--------------------------------------------------------------------------
    | Relationship Methods
    |--------------------------------------------------------------------------
    */

    /**
     * many-to-many relationship method
     *
     * @return QueryBuilder
     */

    public function maintask(){
        return $this->belongsTo(Maintask::class);

    }

    public function task(){
        return $this->belongsTo(Task::class);

    }

//    public function status(){
//        return $this->belongsTo(Status::class);
//
//    }


}
