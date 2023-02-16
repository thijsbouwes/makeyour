<?php

namespace App\Http\Controllers;

use App\Enums\CacheTags;

class CacheController extends Controller
{
    public function __invoke()
    {
        cache()->tags(CacheTags::STRAPI->value)->flush();

        return 'Cache flushed';
    }
}
