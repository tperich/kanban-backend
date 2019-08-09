<?php

namespace App\Http\Controllers\Api\Task;

use App\Http\Controllers\Controller;
use App\Services\Task\TaskService;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TaskController extends Controller
{
    /**
     * @var TaskService $taskService
     */
    protected $taskService;

    public function __construct(
        TaskService $taskService
    ) {
        $this->taskService = $taskService;
    }

    /**
     * Adds a new task
     * 
     * @param Request $request
     * 
     * @return Response Json respnose
     */
    public function addTask(Request $request)
    {
        $boardId = $request->route('board');
        $columnId = $request->column_id;

        $taskData = [
            'title' => $request->name,
            'description' => $request->desc,
        ];

        $board = $this->taskService->addTask($boardId, $columnId, $taskData);

        return response()->json($board);
    }

    /**
     * Deletes a task
     * 
     * @param Request $request
     * 
     * @return Resposne Json response
     */
    public function deleteTask(Request $request)
    {
        $taskId = $request->task_id;
        $boardId = $request->route('board');

        return $this->taskService->deleteTask($boardId, $taskId);
    }
}
