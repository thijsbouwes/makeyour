<?php

namespace App\Http\Controllers;

use App\Services\StrapiService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request, StrapiService $service)
    {
        $homePage = $service->getEntries('homepage', ['hero.image']);
        $posts = $service->getEntries('posts', ['slug', 'image', 'author.image', 'tags']);

        return view('pages.home')
            ->with('posts', $posts)
            ->with('homePage', $homePage);
    }
}
