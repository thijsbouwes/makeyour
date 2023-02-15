<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BlogController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('pages.blog')
            ->with('blog', [
                'title' => 'Foobar',
                'description' => 'Hello world'
            ]);
    }
}
