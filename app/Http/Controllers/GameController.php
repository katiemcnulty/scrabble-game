<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Game::orderBy('created_at', 'ASC')->get();
    }

    
    public function store(Request $request)
    {
        $newGame = new Game;
        $newGame->member1_id = $request->get('game')['player1'];
        $newGame->member2_id = $request->get('game')['player2'];

        $newGame->player1_score = $request->get('game')['player1Score'];
        $newGame->player2_score = $request->get('game')['player2Score'];
        $newGame->save();

        return $newGame;
    }
    

     
    public function destroy($id)
    {
        //
    }
}
