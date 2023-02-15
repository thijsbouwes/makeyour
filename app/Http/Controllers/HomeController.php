<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        // todo fetch blogs
        return view('pages.home')->with('blogs', [
            [
                'title' => 'Foobar',
                'description' => 'Hello world'
            ]
        ]);
    }
}
