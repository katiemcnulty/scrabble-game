<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    
    public function player1Games() {
        return $this->hasMany(Game::class, 'member1_id');
    }

    
    public function player2Games() {
        return $this->hasMany(Game::class, 'member2_id');
    }

}
