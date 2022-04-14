<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $data = Comment::all();
        return response()->json($data);
    }

    public function show($blog)
    {
        $data = Comment::where('blog', $blog)->orderBy('created_at', 'desc')->get();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $comment = Comment::create($request->all());
        return response()->json($comment, 201);
    }
}
