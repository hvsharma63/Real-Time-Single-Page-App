<?php

namespace App\Http\Controllers;

use App\Like;
use Illuminate\Http\Request;
use App\Reply;

class LikeController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('JWT');
    }

    public function like(Reply $reply)
    {
        $reply->like()->create([
            'user_id' => '1'
        ]);
    }

    public function dislike(Reply $reply)
    {
        // $reply->like()->where('user_id', auth()->id())
        $reply->like()->where('user_id', '1')->first()->delete();
    }
}
