<div class="mt-6 flex items-center">
    <div class="flex-shrink-0">
        @if ($author)
            <span class="sr-only">{{ $author['attributes']['name'] }}</span>
        @endif
        @if ($author && $author['attributes']['image']['data'])
            <img class="h-10 w-10 rounded-full object-cover" src="{{ config('services.strapi.endpoint') . $author['attributes']['image']['data']['attributes']['formats']['small']['url'] }}">
        @endif
    </div>
    <div class="ml-3">
        @if ($author)
            <p class="text-sm font-medium text-gray-900">
                <a href="#" class="hover:underline">{{ $author['attributes']['name'] }}</a>
            </p>
            <div class="flex space-x-1 text-sm text-gray-500">
                <time datetime="{{ now()->parse($createdAt)->format('Y-m-d') }}">{{ now()->parse($createdAt)->format('d-m-Y H:m') }}</time>
            </div>
        @endif
    </div>
</div>
