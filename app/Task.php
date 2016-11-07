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
//    public function subtasks()
//    {
//        return $this->belongsToMany(Subtask::class);
//    }

//    public function hasSubtasks(Subtask $subtasks)
//    {
//        return $this->subtasks->contains($subtasks);
//    }

}
