<?php

namespace App\Contracts\Task;

use App\Models\Task\Task;

interface TaskRepository
{
    /**
     * Adds a new task
     * 
     * @param string $boardId board id
     * @param string $columnId column id
     * @param array new task
     * 
     * @return Task
     */
    public function addTask(string $boardId, string $columnId, array $taskData);
}
