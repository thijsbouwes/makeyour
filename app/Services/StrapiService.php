<?php

namespace App\Services;

use App\Enums\CacheTags;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class StrapiService
{
    public function getEntries(string $type, array $populate = [], array $parameters = [])
    {
        $parameters = array_merge([
            'populate' => $populate,
            'locale' => App::currentLocale()
        ], $parameters);

        $cacheKey = "$type-" . md5(json_encode($parameters));
        if ($cache = cache()->tags(CacheTags::STRAPI->value)->get($cacheKey)) {
            return $cache;
        }

        $data = $this
            ->prepareRequest()
            ->get($type, $parameters)
            ->throw(function (Response $response) {
                Log::error('Strapi error', ['message' => $response->json(), 'status' => $response->status()]);
                throw new ModelNotFoundException();
            })
            ->json('data');

        cache()->tags(CacheTags::STRAPI->value)->put($cacheKey, $data, now()->addDay());

        return $data;
    }

    public function getEntriesWhere(string $type, string $fieldName, string $fieldValue, array $populate = [])
    {
        $parameters = [
            "filters[$fieldName][\$eq]" => $fieldValue
        ];

        return $this->getEntries($type, $populate, $parameters);
    }

    private function prepareRequest(): PendingRequest
    {
        return Http::baseUrl(config('services.strapi.endpoint') . '/api/')
            ->withToken(config('services.strapi.token'))
            ->acceptJson();
    }
}
