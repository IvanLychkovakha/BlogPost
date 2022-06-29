<?php

namespace App\Http\Controllers;

use App\Http\Requests\Base\IndexRequest;
use App\Http\Requests\Post\CreateRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(IndexRequest $request)
    {

        return view('web.sections.post.index',[
            'posts' => Post::paginate($request->getPerPage())
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.sections.post.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $data = $request->validated();

        $data['images'] = $this->saveImages($data['images']);

       // dd($data);
        DB::beginTransaction();

        $post = Auth::user()->posts()->create($data);

        $post->categories()->attach($data['categories']);

        DB::commit();

        return redirect()->route('posts.index');
    }


    private function saveImages($images)
    {
        $imagesArr = [];

        foreach ($images as $item) {
            $imagesArr[] = str_replace('public', '/storage', Storage::putFile('public/images', $item));
        }

        return $imagesArr;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post->load('categories');
        return view('web.sections.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();

        return view('web.sections.post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();

        if(isset($data['images']))
        {
            $data['images'] = $this->saveImages($data['images']);

        }
        DB::beginTransaction();

            $post->update($data);
            $post->categories()->sync($data['categories']);
            
        DB::commit();

        return redirect()->route('user.profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
    }
}
