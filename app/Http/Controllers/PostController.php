<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Inertia\Inertia;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $posts = PostResource::collection($posts)->resolve();

        return Inertia::render('Post/Index', ['posts' => $posts]);

    }

    public function show(Post $post)
    {
        return inertia('Post/Show', ['post' => $post]);
    }

    public function create()
    {
        return inertia('Post/Create');
    }

    public function store(StoreRequest $storeRequest): RedirectResponse
    {
        Post::create($storeRequest->validated());
        return redirect()->route('post.index');
    }

    public function edit(Post $post)
    {
        //Post::update();
        return inertia('Post/Edit', ['post' => $post]);
    }

    public function update(UpdateRequest $updaterequest, Post $post)
    {
        $post->update($updaterequest->validated());
        return redirect()->route('post.index');
    }

    public function delete(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}
