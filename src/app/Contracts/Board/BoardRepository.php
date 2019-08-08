<?php

namespace App\Contracts\Board;

use App\Models\Board\Board;

interface BoardRepository
{
    /**
     * Returns board by id.
     *
     * @param string $boardId Board id.
     *
     * @return Board
     */
    public function getById(string $boardId);
}
