<?php

namespace App\Http\Controllers\Api\Board;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BoardController extends Controller
{
    /**
     * Returns "I am alive"
     * 
     * @return Response Json response
     */
    public function get(Request $request)
    {
        return response()->json([
            'message' => 'I am alive'
        ]);
    }
}