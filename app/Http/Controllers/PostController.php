<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return Inertia::render('Post/Index', ['posts' => $posts]);

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
}
