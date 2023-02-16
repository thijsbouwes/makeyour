<?php

namespace App\Http\Controllers;

use App\Services\StrapiService;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __invoke(Request $request, StrapiService $service)
    {
        $blogPage = $service->getEntries('blogpage', ['cta.image']);
        $posts = $service->getEntriesWhere('posts', 'slug', $request->route('slug'), ['slug', 'image', 'author.image', 'tags']);

        if (!$posts) {
            throw new ModelNotFoundException();
        }

        return view('pages.blog')
            ->with('post', $posts[0])
            ->with('blogPage', $blogPage);
    }
}
