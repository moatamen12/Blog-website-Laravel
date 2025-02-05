<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){//naming the action index because it will show all posts
        $allPosts = [
            ['id' => 1, 'title' => 'PHP', 'postedBy' => 'moatamen', 'createdAt' => '2021-01-01'],
            ['id' => 2, 'title' => 'Laravel', 'postedBy' => 'moatamen', 'createdAt' => '2021-01-02'],
            ['id' => 3, 'title' => 'VueJs', 'postedBy' => 'moatamen', 'createdAt' => '2021-01-03'],
            ['id' => 4, 'title' => 'ReactJs', 'postedBy' => 'moatamen', 'createdAt' => '2021-01-04'],
            ['id' => 5, 'title' => 'Angular', 'postedBy' => 'moatamen', 'createdAt' => '2021-01-05'],
        ];
        return view('posts.index', ['posts' => $allPosts]);
    }

    public function show($postID){
        $senglePost = ['id' => 1,'description' => 'PHP os cool language.' ,'title' => 'PHP','email' => 'ahmed@gmail.com.','postedBy' => 'moatamen', 'createdAt' => '2021-01-01'];
        return view('posts.show', ['post' => $senglePost]);
    }
}
?>