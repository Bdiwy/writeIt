<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'body' => 'required|string|max:1000',
            'status' => 'required|in:p,o,f', // p=public, o=only me, f=friends
        ]);

        $post = Post::create([
            'user_id' => Auth::id(),
            'body' => $validated['body'],
            'status' => $validated['status'],
        ]);

        return response()->json([
            'success' => true,
            'post' => $post,
            'message' => 'Post created successfully'
        ]);
    }
} 