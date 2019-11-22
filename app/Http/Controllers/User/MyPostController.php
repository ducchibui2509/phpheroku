<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

class MyPostController extends Controller
{
    public function publicPost(Request $request)
    {
        return view('user.post-list');
    }

    public function pendingPost(Request $request)
    {
        return view('user.post-list');
    }

    public function closedPost(Request $request)
    {
        return view('user.post-list');
    }

    public function favoritePost(Request $request)
    {
        return view('user.post-list');
    }
}
