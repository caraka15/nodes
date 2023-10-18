<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;



class PostController extends Controller
{
    public function index()
    {

        $title = '';
        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' in ' . $author->name;

        }
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        return view('blogs', [
            "title" => "All Posts" . $title,
            "active" => "posts",
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "All Posts",
            "active" => "posts",
            "post" => $post
        ]);
    }

}