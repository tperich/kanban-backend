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
     * Returns board with columns and tasks
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
}
