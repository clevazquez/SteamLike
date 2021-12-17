<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameCommentsController extends Controller
{
    public function store(Game $game)
    {
        request()->validate([
            'body' => 'required'
        ]);
        $game->comments()->create([
            'user_id' => request()->user()->id,
            'body' => request('body')
        ]);

        return back();
    }
}
