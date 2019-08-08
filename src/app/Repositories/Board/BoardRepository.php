<?php

namespace App\Repositories\Board;

use App\Models\Board\Board;
use App\Contracts\Board\BoardRepository as Repository;

class BoardRepository implements Repository
{
    /**
     * Returns board by id.
     *
     * @param string $boardId Board id.
     *
     * @return Board
     */
    public function getById(string $boardId)
    {
        return Board::where('id', $boardId)->first();
    }

    /**
     * Returns board with columns and tasks by id.
     *
     * @param string $boardId Board id.
     *
     * @return Board
     */
    public function getAllById(string $boardId)
    {
        return Board::where('id', $boardId)
            ->with('columns', 'columns.tasks')
            ->first();
    }
}
