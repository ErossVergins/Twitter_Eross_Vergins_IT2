<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $request = new request([
            'content' => request()->get("name", "")
        ]);
        $request->up();

        return redirect()->back()->with('success', 'Post created successfully!');
    }
}
