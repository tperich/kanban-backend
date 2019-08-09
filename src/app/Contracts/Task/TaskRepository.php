<?php

namespace App\Contracts\Task;

interface TaskRepository
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
    public function addTask(string $boardId, string $columnId, array $taskData);
}
