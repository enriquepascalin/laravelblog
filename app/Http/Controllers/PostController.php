<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return Post::with('user', 'comments.user')->get();
    }

    public function show(Post $post) {
        return $post->load('user', 'comments.user');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'user_id' => 'required|exists:users,id'
        ]);
        return Post::create($validated);
    }

    public function update(Request $request, Post $post) {
        $post->update($request->validate([
            'title' => 'sometimes|max:255',
            'content' => 'sometimes'
        ]));
        return $post;
    }

    public function destroy(Post $post) {
        $post->delete();
        return response()->noContent();
    }
}
