<?php

namespace App\Services\Board;

use App\Contracts\Board\BoardRepository;
use App\Exceptions\Board\BoardNotFoundException;

class BoardService
{
    /**
     * @var BoardRepository $boardRepository
     */
    protected $boardRepository;

    public function __construct(
        BoardRepository $boardRepository
    ) {
        $this->boardRepository = $boardRepository;
    }

    /**
     * Returns board with columns and tasks by unique board id.
     * 
     * @param string $boardId board id.
     * 
     * @throws BoardNotFoundException if board is not found.
     * 
     * @return Board
     */
    public function getBoardById(string $boardId)
    {
        $board = $this->boardRepository->getById($boardId);

        if (!$board) {
            throw new BoardNotFoundException();
        }

        return $board;
    }
}
