<?php

namespace App\Contracts\Board;

use App\Models\Board\Board;

interface BoardRepository
{
    /**
     * Returns board by id.
     *
     * @param string $boardId board id.
     *
     * @return Board
     */
    public function getById(string $boardId);


    /**
     * Returns board with columns and tasks by id.
     * 
     * @param string $boardId board id.
     * 
     * @return Board
     */
    public function getAllById(string $boardId);
}
