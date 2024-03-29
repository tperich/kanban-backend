<?php

namespace App\Services\Task;

use App\Contracts\Task\TaskRepository;

class TaskService
{
    /**
     * @var TaskRepository $taskRepository
     */
    protected $taskRepository;

    public function __construct(
        TaskRepository $taskRepository
    ) {
        $this->taskRepository = $taskRepository;
    }

    /**
     * Adds a new task
     * 
     * @param string $boardId board id
     * @param string $columnId column id
     * @param array $taskData new task
     * 
     * @return Board
     */
    public function addTask(string $boardId, string $columnId, array $taskData)
    {
        $board = $this->taskRepository->addTask($boardId, $columnId, $taskData);

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
    public function deleteTask(string $boardId, string $taskId)
    {
        $board = $this->taskRepository->deleteTask($boardId, $taskId);

        return $board;
    }
}
