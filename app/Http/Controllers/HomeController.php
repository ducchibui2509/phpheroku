<?php

namespace App\Http\Controllers;

use App\NavMenus;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function show(){
        $navmenus = NavMenus::all();
        return view('welcome',['navmenus' => $navmenus]);
    }

    public function toPage($id){
//        $navmenus = NavMenus::all();
        $posts = Post::where('category_id', $id)->paginate(4);
        return view('layouts/pages/category', ['posts' => $posts]);
    }

    public function addPost(){
        $navmenus = NavMenus::all();
        return view('layouts.addPost',['navmenus' => $navmenus]);
    }

    public function storePost(Request $request){

        Post::create($request->all());
//        $post = new Post();
//        $post -> author_id = 1;
//        $post -> category_id = $request ->category_id;
//        $post ->title = $request ->title;
//        $post -> seo_title = $request ->seo_title;
//        $post -> slug = $request ->seo_title;
//        $post -> address = '123';
//        $post -> latitude = '321'   ;
//        $post -> longitude = '123';
//        $post -> body = $request ->body;
//        $path = explode("/",$request->file('image')->store('\public\posts'));
//        $post -> image = 'posts/'.$path[1];
//        $post ->save();

        return redirect('/');
    }

    public function editPost($id){
        $navmenus = NavMenus::all();
        $post = POST::find($id);
        return view('layouts/editPost',['navmenus' => $navmenus,'post'=>$post]);
    }


    public function updatePost(Request $request, $id){
        $post = POST::find($id);
        $post -> update($request->all());
        $navmenus = NavMenus::all();
        $posts = Post::where('category_id', $id)->paginate(4);
        return view('layouts/pages/category',['navmenus'=>$navmenus,'posts'=>$posts]);
    }

    public function destroy($id){
        $post = POST::find($id);
        $category_id = $post->category_id;
        $post->delete();

        $navmenus = NavMenus::all();
        $posts = POST::all()->where('category_id','=',$category_id);
        return view('layouts/pages/category',['navmenus'=>$navmenus,'posts'=>$posts]);
    }
}
