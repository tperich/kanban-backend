<?php

namespace App\Repositories\Task;

use App\Models\Task\Task;
use App\Models\Board\Board;
use App\Models\Column\Column;
use App\Exceptions\Task\TaskNotFoundException;
use App\Exceptions\Board\BoardNotFoundException;
use App\Exceptions\Column\ColumnNotFoundException;
use App\Contracts\Task\TaskRepository as Repository;

class TaskRepository implements Repository
{
    /**
     * Adds a new task
     * 
     * @param string $boardId board id
     * @param string $columnId column id
     * @param array new task
     * 
     * @return Board
     */
    public function addTask(string $boardId, string $columnId, array $taskData)
    {
        $column = Column::where('board_id', $boardId)->where('id', $columnId)->first();

        if (!$column) {
            throw new ColumnNotFoundException();
        }

        $task = new Task;
        $task->title = $taskData['title'];
        $task->column_id = $columnId;
        $task->description = $taskData['description'];
        $task->save();

        $board = Board::where('id', $boardId)->with('columns', 'columns.tasks')->first();

        if (!$board) {
            throw new BoardNotFoundException();
        }

        return $board;
    }

    /**
     * Deletes a task
     * 
     * @param string $boardId board id
     * @param string $taskId task id
     * 
     * @return Board
     */
    public function deleteTask($boardId, $taskId)
    {
        $task = Task::where('id', $taskId)->first();
        if (!$task) {
            throw new TaskNotFoundException();
        }

        $task->delete();

        $board = Board::where('id', $boardId)->with('columns', 'columns.tasks')->first();

        if (!$board) {
            throw new BoardNotFoundException();
        }

        return $board;
    }
}
