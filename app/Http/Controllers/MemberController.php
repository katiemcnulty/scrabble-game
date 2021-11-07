<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Member;


class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::orderBy('created_at', 'ASC')->get();

        

        
        foreach($members as $member ) {

            //add to each score for each game
            $score = 0;
            $totalGames = 0;
            $winner = 0;
            $loser = 0;    
            $highestScore = 0;
            $highestScoringGame = false;
            $highestScoringPlayer = '';
                             
            //calculating player1 and player2 games
            foreach($member->player1Games as $game) {
                $score += $game->player1_score;

                //calculate winner or loser
                if($game->player1_score > $game->player2_score) {
                    $winner++;
                } else {
                    $loser++;
                }

                //calculate highest score
                if ($game->player1_score > $highestScore){
                    $highestScore = $game->player1_score;
                    $highestScoringGame = true;
                    
                } else {
                    $highestScoringGame = 'No Game Data';
                }

                               
                $totalGames++;
            }

            foreach($member->player2Games as $game) {
                $score += $game->player2_score;

                //calculate winner or loser

                if($game->player2_score > $game->player1_score) {
                    $winner++;
                } else {
                    $loser++;
                }               

                //calculate highest score
                if ($game->player2_score > $highestScore){
                    $highestScore = $game->player2_score;
                    $highestScoringGame = true;
                } else {
                    $highestScoringGame = 'No Game Data';
                }

                $totalGames++;
            }

            //calculating average score

            if($totalGames===0 || $score === 0){
                $memberAvg = 0;

            }else {
                
                $memberAvg =  $score/$totalGames;
            }

            //adding time of game for highest score
            if ($highestScoringGame) {
                $bestGameTime = date("Y-d-m H:i",strtotime($game->date_played));
            } else {
                $bestGameTime = 'No Game Data';
            } 

            $member->bestGameTime = $bestGameTime;
            $member->highScore = $highestScore;
            $member->bestPlayer = $highestScoringPlayer;
            $member->wins = $winner;
            $member->loses = $loser;
            $member->averageScore= round($memberAvg,2);
        }

        return $members;
    }


    public function store(Request $request)
    {
        $newMember = new Member;
        $newMember->name = $request->get('member')['name'];
        $newMember->email = $request->get('member')['email'];
        $newMember->save();

        return $newMember;
    }
    public function update(Request $request, $id)
    {
        $existingMember = Member::find($id);

        if( $existingMember) {
            $existingMember->name = $request->get('member')['name'];
            $existingMember->email = $request->get('member')['email'];

            $existingMember->save();
            return $existingMember;
        }

        return "Member not found";

    }
    public function destroy($id)
    {
        //
    }
}
