<?php

namespace App\Http\Controllers\Api\Board;

use App\Http\Controllers\Controller;
use App\Services\Board\BoardService;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BoardController extends Controller
{
    /**
     * @var BoardService $boardService
     */
    protected $boardService;

    public function __construct(
        BoardService $boardService
    ) {
        $this->boardService = $boardService;
    }

    /**
     * Returns board 
     * 
     * @param Request $request
     * 
     * @return Response Json response
     */
    public function get(Request $request)
    {
        $id = $request->route('board');

        $board = $this->boardService->getBoardById($id);

        return response()->json([
            'data' => $board
        ]);
    }

    /**
     * Returns board with tasks and columns
     * 
     * @param Request $request
     * 
     * @return Response Json response
     */
    public function getAll(Request $request)
    {
        $id = $request->route('board');

        $all = $this->boardService->getAllById($id);

        return response()->json($all);
    }

    /**
     * Updates existing board
     * 
     * @param Request $request
     * 
     * @return Response Json response
     */
    public function update(Request $request)
    {
        /**
         * Only task data is applicable until column logic
         * is implemented on frontend
         */
        $id = $request->route('board');
        $taskData = $request->all();

        return $this->boardService->update($id, $taskData);
    }
}
