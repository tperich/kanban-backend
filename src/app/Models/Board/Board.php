<?php

namespace App\Models\Board;

use App\Models\Column\Column;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
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
     * Get columns for board.
     * 
     * @return Collection
     */
    public function columns()
    {
        return $this->hasMany(Column::class);
    }
}
