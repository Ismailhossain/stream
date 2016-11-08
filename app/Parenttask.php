<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parenttask extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'parents';

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
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }

//    public function hasSubtasks(Subtask $subtasks)
//    {
//        return $this->subtasks->contains($subtasks);
//    }

}
