<?php

namespace App\Http\Controllers;

use App\PostAtrributes;
use Illuminate\Http\Request;
use App\Posts;
use App\PostImages;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AddPostController extends Controller
{

    public function addPost(){
            return view('posts.addPost');
        }
    public function addAttributes(Request $request){
            $attributes = DB::table('attributes')->where('attribute_group', '=', $request->post_category)->get();
            $id = $request->post_id;
        for ($i=0; $i<$attributes->count(); $i++){
            $temp = $attributes[$i]->attribute_name;
            if($request->$temp != ""){
              //return $request->$temp;
                $postattribute = new PostAtrributes;
                $postattribute->post_id = $id;
                $postattribute->attribute_id = $attributes[$i]->attribute_id;
                $postattribute->value = $request->$temp;
                $postattribute->Save();
            }
        }
        if($request->hasfile('images')) {
            foreach ($request->images as $photo) {
                $postimage = new PostImages;
                $postimage->post_id = $id;
                $filename = $photo->store('photos');
                $postimage->image = $filename;
                $postimage->Save();
            }
        }
               return "Post Created Successfully";
    }
    public function addJobs(){
        return view('posts/addJobs');
    }
    public function addCars(){
        return view('posts/addCars');
    }
    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'post_category' => 'required',
        ]);

        $post = Posts::create($request->all());

        if($post->post_category == 1)
            return view('posts.addRealEstate')->with('post', $post);
        else if($post->post_category==2)
            return view('posts.addCars')->with('post', $post);
        else if($post->post_category==3)
            return view('posts.addJobs')->with('post', $post);
        else
            return redirect('addPost');
    }
}
