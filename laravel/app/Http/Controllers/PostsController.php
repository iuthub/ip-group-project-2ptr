<?php

namespace sales\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use sales\Post;
use DB;
class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except'=> ['index', 'show', 'clothing', 'food', 'technology', 'others']]);
    }

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        $topposts = Post::where('amount','>', '20')->paginate(5);
        return view('posts.index',[
            'posts'=> $posts, 'topposts'=> $topposts
            ]);
    }

    public function clothing()
    {
        $posts = Post::where('category','=', 'Clothing')->orderBy('created_at', 'desc')->paginate(10);

        $topposts = Post::where('amount','>', '20')->where('category','=','clothing')->paginate(5);
        return view('posts.clothing',[
            'posts'=> $posts, 'topposts'=> $topposts
        ]);
    }

    public function food()
    {
        $posts = Post::where('category','=', 'Food')->orderBy('created_at', 'desc')->paginate(10);
        $topposts = Post::where('amount','>', '20')->where('category','=','food')->paginate(5);
        return view('posts.food',[
            'posts'=> $posts, 'topposts'=> $topposts
        ]);
    }

    public function technology()
    {
        $posts = Post::where('category','=', 'Technology')->orderBy('created_at', 'desc')->paginate(10);
        $topposts = Post::where('amount','>', '20')->where('category','=','technology')->paginate(5);
        return view('posts.technology',[
            'posts'=> $posts, 'topposts'=> $topposts
        ]);
    }

    public function others()
    {
        $posts = Post::where('category','=', 'Other')->orderBy('created_at', 'desc')->paginate(10);
        $topposts = Post::where('amount','>', '20')->where('category','=','other')->paginate(5);
        return view('posts.others',[
            'posts'=> $posts, 'topposts'=> $topposts
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {
       $this->validate($request, [
           'title' =>'required',
           'body' =>'required',
           'category' =>'required',
           'amount' =>'required',
           'cover_image' => 'image|nullable|max:1999'
       ]);

        if($request->hasFile('cover_image')){
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);

        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');

        $post->category = $request->input('category');
        $post->amount = $request->input('amount');
        $post->user_id = auth()->user()->id;

            $post->cover_image = $fileNameToStore;

        $post->save();

        return redirect('/posts')->with('success', 'Post Created');
    }


    public function show($id)
    {

        $post = Post::find($id);
        $x = $post->user->id;
        $cat = $post->category;

        if(auth()->check() && (auth()->user()->id == $post->user->id)) {
            //$posts = Post::where('user_id','=', "auth()->user()->id")->orderBy('created_at', 'desc')->paginate(10);
            return redirect('/dashboard');//->with('posts', $posts);
        }
        //$posts_others = DB::select("SELECT * FROM posts WHERE user_id = $x ORDER BY created_at DESC ");
        $posts = Post::where('user_id','=', "$x")->orderBy('created_at', 'desc')->paginate(10);
        $relatedposts= Post::where('category','=', "$cat")->where('user_id','!=',"$x")->paginate(5);
        return view('posts.show',[
            'posts'=> $posts, 'relatedposts'=> $relatedposts
        ]);
    }


    public function edit($id)
    {
        $post = Post::find($id);

        if(auth()->user()->id !== $post->user->id) {
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }
        return view('posts.edit')->with('post', $post);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' =>'required',
            'body' =>'required',
            'category' =>'required',
            'amount' =>'required'
        ]);

        if($request->hasFile('cover_image')){
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);

        }

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->category = $request->input('category');
        $post->amount = $request->input('amount');
        if($request->hasFile('cover_image')){
            $post->cover_image = $fileNameToStore;
        }
        $post->save();

        return redirect('/posts')->with('success', 'Post Updated');
    }


    public function destroy($id)
    {
        $post = Post::find($id);
        if(auth()->user()->id !== $post->user->id) {
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }
        if($post->cover_image != 'noimage.jpg'){
            Storage::delete('public/cover_images/'.$post->cover_image);
        }
        $post->delete();
        return redirect('/posts')->with('success', 'Post Removed');
    }


    public function search(Request $request){
        $searchData = $request->searchData;


        $posts = Post::where('title', 'like','%'.$searchData.'%')
           ->paginate(10);

        if(count($posts)==0){
            return redirect('/posts')->with('error', 'No such product!');
        }
        $topposts = Post::where('amount','>', '20')->paginate(5);
        return view('posts.index',[
            'posts'=> $posts, 'topposts'=> $topposts
        ]);
    }
}
