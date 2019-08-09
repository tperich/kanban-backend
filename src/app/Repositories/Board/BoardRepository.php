<?php

namespace App\Repositories\Board;

use App\Models\Task\Task;
use App\Models\Board\Board;
use App\Contracts\Board\BoardRepository as Repository;

class BoardRepository implements Repository
{
    /**
     * Returns a board by id.
     *
     * @param string $boardId board id.
     *
     * @return Board
     */
    public function getById(string $boardId)
    {
        return Board::where('id', $boardId)->first();
    }

    /**
     * Returns a board with columns and tasks by id.
     *
     * @param string $boardId board id.
     *
     * @return Board
     */
    public function getAllById(string $boardId)
    {
        return Board::where('id', $boardId)
            ->with('columns', 'columns.tasks')
            ->first();
    }

    /**
     * Updates an existing board
     * 
     * @param string $boardId board id.
     * @param array $taskData new task data.
     * 
     * @return Board
     */
    public function update(string $boardId, array $taskData)
    {
        $task = Task::where('id', $taskData['id'])->first();
        $task->column_id = $taskData['column_id'];
        $task->save();

        $board = Board::where('id', $boardId)->with('columns', 'columns.tasks')->first();

        return $board;
    }
}
