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
     * Add new task
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

        $task = $this->taskService->addTask($boardId, $columnId, $taskData);

        return response()->json($task);
    }
}
