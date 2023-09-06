<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use parsedown;

class ExamplePostController extends Controller
{
    function show($post_id){
        $title = "Example Title";
        $content = "Example Content";

        $title = '日的及度加機子魚年';
        $content = '# Nisi virgine......';

        {
            $Parsedown = new Parsedown();
            $content = $Parsedown->text($content);
        }

        return view('blog.post', [
            "title" => $title,
            'content' => $content,
        ]);
    }
}
