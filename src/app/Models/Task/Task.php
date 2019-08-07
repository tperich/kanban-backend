<?php

namespace App\Models\Task;

use App\Models\Column\Column;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
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
     * Get the column for the task.
     *
     * @return Column
     */
    public function column()
    {
        return $this->belongsTo(Column::class);
    }
}
