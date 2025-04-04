<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      //  $posts=Post::all();
        $posts=Post::with('user')->orderBy ('id','desc')->get();
        return view('posts.index',[
            'posts'=> $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Gate::authorize('create-poat');
       // Gate::authorize('create',Post::class);
        if (\request()->user()->cannot('create', Post::class)) {
            abort (403);
        }
        //если юзеру запрещено то вернуть ошибку
        /*
     if(Gate::denies('create-post'))
     {
         abort (403);
     }*/
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Gate::authorize('create',Post::class);
       /* if(Gate::denies('create-post'))
        {
            abort (403);
        }*/
        $validated = $request->validate([
            'title'=>['required','max:255'],
        ]);
        Post::create([
            'title'=>$validated['title'],
            'user_id'=>auth()->user()->id,
        ]);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        Gate::authorize ('update',$post);
        //$post=Post::query ()->findOrFail ($id);

        /*
        if(!Gate::allows('update-post',$post))
        {
            abort (403);
        }*/

        return view('posts.edit',[
           'post'=>$post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //$post=Post::query ()->findOrFail ($id);
        Gate::authorize ('update',$post);
        /*
        if(!Gate::allows('update-post',$post))
        {
            abort (403);
        }*/
        $validated = $request->validate([
            'title'=>['required','max:255'],
        ]);
        $post->update($validated);
        return redirect ()->route('home')->with ('success','Успешно обновлено');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Gate::authorize ('delete',$post);
        //$post=Post::query ()->findOrFail ($id);
        /*
        if(!Gate::allows('delete-post',$post))
        {
            abort (403);
        }*/
        $post->delete ();
        return redirect ()->route('home')->with ('success','Успешно удалено');


    }
}
