<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Photo;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with(['photo','user','category'])->latest()->paginate(10);
        return view('admin.posts.index', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tags = Tag::pluck('name', 'id')->all();
        $categories = Category::pluck('name', 'id')->all();
        return view('admin.posts.create', compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //ddd($request);
        $input = $request->all();
        $user = Auth::user();
        if($file = $request->file('photo_id')){
            $name = time().$file->getClientOriginalName();
            $file->move('images/posts', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        $input['slug']= Str::slug($request->title, '-');
        $userposts = $user->posts()->create($input);

        $tags = $request->tag_id;
        $post = Post::findOrFail($userposts->id);

        foreach($tags as $tag){

            $tagfind = Tag::findOrFail($tag);

            $post->tags()->save($tagfind);
        }



        return redirect('admin/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $post = Post::findOrFail($id);
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::pluck('name','id')->all();
        $post = Post::findOrFail($id);
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        //$post = Post::findOrFail($id);
        //$user = Auth::user();
        $input = $request->all();
        $post = Auth::user()->posts()->where('id',$id)->first();


        if($file = $request->file('photo_id')){
            $name = time().$file->getClientOriginalName();
            $file->move('images/posts', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        $input['slug']= Str::slug($request->title, '-');
        $post->update($input);
        return redirect('admin/posts');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $post = Post::findOrFail($id);
        unlink(public_path() . $post->photo->file);
        $post->delete();
        return redirect('admin/posts');
    }

    public function post($slug){

       $post = Post::with(['user', 'photo'])->where('slug',$slug)->first();
       $postcomments = $post->postcomments()->with(['user', 'photo'])->whereIsActive(1)->get();
       return view('post', compact('post', 'postcomments'));
    }
}
