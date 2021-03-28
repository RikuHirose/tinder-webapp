<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Swipe;

class UserController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // swipeしていないuserを取得
        $swipedUserId = Swipe::where('from_user_id', \Auth::user()->id)->get()->pluck('to_user_id');

        $user = User::whereNotIn('id', $swipedUserId)->where('id', '<>', \Auth::user()->id)->first();

        return view('pages.user.index', [
            'user' => $user
        ]);
    }
}
