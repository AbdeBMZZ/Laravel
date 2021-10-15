<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {

        $posts = [
            [
                'id' => 1,
                'title' => 'post 1',
                'body' => 'post body 1'
            ],
            [
                'id' => 2,
                'title' => 'post 2',
                'body' => 'post body 2'
            ],
            [
                'id' => 3,
                'title' => 'post 3',
                'body' => 'post body 3'
            ]
        ];
        return view('home')->with([
            'posts' => $posts
        ]);
    }
}
