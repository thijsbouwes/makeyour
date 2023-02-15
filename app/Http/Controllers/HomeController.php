<?php

namespace App\Http\Controllers;

use App\Services\StrapiService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request, StrapiService $service)
    {
        $homePage = $service
            ->getEntries('homepage', ['hero.image'])
            ->json('data');
        $posts = $service
            ->getEntries('posts', ['slug', 'image', 'author', 'tags'])
            ->json('data');

        return view('pages.home')
            ->with('posts', $posts)
            ->with('homePage', $homePage);
    }
}
