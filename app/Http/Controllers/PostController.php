<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Exception;

use App\Models\User;
use App\Models\Post;
use App\Models\PostCategory;


class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => ['show']]);
        $this->middleware('creator', ['except' => ['show']]);
    }

    public function index()
    {
        $creator = User::where('id', Auth::user()->id)->first();
        $posts = Post::where('user_id', $creator->id)->with('category')->get();
        // foreach($posts as $post){
        //     if(strpos($post->content, '. '))
        //         $post->content = substr($post->content, 0, strpos($post->content, '. ', strpos($post->content, '. ')+1)+1);
        // }
        
        $categories = PostCategory::where('user_id', Auth::user()->id)->get();
        
        return view('creator.mypost', ['creator' => $creator, 'posts' => $posts, 'categories' => $categories]);
    }

    public function show($slug, $id)
    {
        $post = Post::where('id', $id)->first();
        return view('supporter.post_show', ['post' => $post]);
    }

    public function create()
    {
        $categories = PostCategory::where('user_id', Auth::user()->id)->get();
        return view('creator.post_create', ['categories' => $categories]);
    }

    public function createAction(Request $request)
    {
        try{
            DB::beginTransaction();
            
            $post = new Post;
            $post->user_id = Auth::user()->id;
            $post->title = $request->title;
            $post->content = $request->content;
            $post->post_category_id = $request->category;
            
            if($request->has('image')) {
                $image = $request->file('image');
                $post->image = $image->store('image', 'public');
            }
            
            $post->save();

            DB::commit();
        } catch(Exception $e){
            DB::rollBack();
            if (isset($image)) {
                Storage::delete('public/'.$image);
            }
			$output = $e->getMessage();
			return redirect('/post')->withErrors(['msg', $output]);
        }

        return redirect('/post');
    }

    public function edit(Request $request)
    {
        if($request->post_id != null){
            $id = $request->post_id;
            $categories = PostCategory::where('user_id', Auth::user()->id)->get();
            $post = Post::where('id', $id)->with('category')->first();
            return view('creator.post_edit', ['post'=> $post, 'categories' => $categories]);
        }
        return redirect('/post')->withErrors(['msg', 'Something went wrong']);
    }

    public function editAction(Request $request, $id)
    {
        try{
            DB::beginTransaction();
            
            $post = Post::where('id', $id)->first();
            $post->title = $request->title;
            $post->content = $request->content;
            $post->post_category_id = $request->category;
            $post->save();

            DB::commit();
        } catch(Exception $e){
            DB::rollBack();
			$output = $e->getMessage();
			return redirect('/post')->withErrors(['msg', $output]);
        }

        return redirect('/post');
    }

    public function delete(Request $request)
    {
        if($request->post_id != null){
            $post = Post::where('id',$request->post_id)->first();

            Storage::delete('public/'.$post->image);
            $post->delete();

            return redirect('/post');
        }

        return redirect('/post')->withErrors(['msg', 'Something went wrong']);
    }

    //post categories
    public function createCategory()
    {
        return view('creator.post_create_category');
    }

    public function createCategoryAction(Request $request)
    {
        try{
            DB::beginTransaction();
            
            $post_category = new PostCategory;
            $post_category->user_id = Auth::user()->id;
            $post_category->name = $request->name;
            $post_category->description = $request->description;
            $post_category->save();

            DB::commit();
        } catch(Exception $e){
            DB::rollBack();
			$output = $e->getMessage();
			return redirect('/post')->withErrors(['msg', $output]);
        }

        return redirect('/post');
    }

}
