<?php

namespace App\Services;

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

        // todo cache logic

        return $this
            ->prepareRequest()
            ->get($type, $parameters)
            ->throw(function (Response $response) {
                Log::error('Strapi error', ['message' => $response->json(), 'status' => $response->status()]);

                throw new ModelNotFoundException();
            });
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
