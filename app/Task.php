<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tasks';

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

    public function parenttasks()
    {
        return $this->belongsTo(Parenttask::class);
    }

//    public function hasSubtasks(Subtask $subtasks)
//    {
//        return $this->subtasks->contains($subtasks);
//    }

}
