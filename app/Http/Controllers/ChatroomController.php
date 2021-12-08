<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

//参考にしたサイト:https://qiita.com/Alesion30/items/8580a85a09822b067ff9

class ChatroomController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add(Request $request)
    {
        // $user = Auth::user();
        $user = Auth::user();
        $comment = $request->input('comment');
        Comment::create([
            'login_id' => $user->id,
            'name' => $user->name,
            'comment' => $comment
        ]);
        return redirect()->route('chatroom');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show()
    {
        $comments = Comment::get();
        return view('chat.show',compact('comments'));
    }
}
