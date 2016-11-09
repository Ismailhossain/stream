<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintask extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'maintasks';

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


}
