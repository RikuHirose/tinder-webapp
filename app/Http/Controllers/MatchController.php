<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MatchController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // 自分へいいねしてくれたユーザー
        $matchedUserIds = Swipe::where('to_user_id', \Auth::user()->id)
                            ->where('is_like', true)
                            ->pluck('from_user_id');

        // 自分へいいねしてくれたユーザーから自分がいいねしたユーザー = マッチしたユーザー
        $matchedUsers = Swipe::where('to_user_id', $matchedUserIds)
                            ->where('from_user_id', \Auth::user()->id)
                            ->where('is_like', true)
                            ->with('toUser')
                            ->get();

        return view('pages.match.index', [
            'matchedUsers' => $matchedUsers
        ]);
    }
}
