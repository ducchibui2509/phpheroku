<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NavMenus;
use App\Post;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('home');
    }

    public function show()
    {
        $navmenus = NavMenus::all();
        return view('welcome', ['navmenus' => $navmenus]);
    }

    public function toPage($id)
    {
        $posts = Post::where('category_id', $id)->paginate(4);
        return view('layouts/pages/category', ['posts' => $posts]);
    }

    public function addPost()
    {
        $navmenus = NavMenus::all();
        return view('layouts.addPost', ['navmenus' => $navmenus]);
    }

    public function storePost(Request $request)
    {
        Post::create($request->all());
        $navmenus = NavMenus::all();
        $category_id = $request -> category_id;
        $posts = Post::where('category_id', $category_id)->paginate(4);
        return view('layouts/pages/category', ['navmenus' => $navmenus, 'posts' => $posts]);
    }

    public function editPost($id)
    {
        $navmenus = NavMenus::all();
        $post = POST::find($id);
        return view('layouts/editPost', ['navmenus' => $navmenus, 'post' => $post]);
    }

    public function updatePost(Request $request, $id)
    {
        $post = POST::find($id);
        $post->update($request->all());
        $category_id = $post->category_id;
        $navmenus = NavMenus::all();
        $posts = Post::where('category_id', $category_id)->paginate(4);
        return view('layouts/pages/category', ['navmenus' => $navmenus, 'posts' => $posts]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $category_id = $post->category_id;
        $post->delete();

        $navmenus = NavMenus::all();
        $posts = Post::where('category_id', $category_id)->paginate(4);
        return view('layouts/pages/category', ['navmenus' => $navmenus, 'posts' => $posts]);
    }
}
