<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'status';

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

    public function parenttasks()
    {
        return $this->belongsToMany(Parenttask::class);
    }

    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }

}
