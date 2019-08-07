<?php

namespace App\Models\Column;

use App\Models\Task\Task;
use App\Models\Board\Board;

use Illuminate\Database\Eloquent\Model;

class Column extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];

    /**
     * Get the board for the column.
     * 
     * @return Board
     */
    public function board()
    {
        return $this->belongsTo(Board::class);
    }

    /**
     * Get the tasks for the column.
     *
     * @return Collection
     */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
