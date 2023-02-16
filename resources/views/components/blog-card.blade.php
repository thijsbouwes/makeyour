<article class="flex flex-col overflow-hidden rounded-lg shadow-lg">
    <div class="flex-shrink-0">
        @if($post['attributes']['image'])
            <img loading="lazy" class="h-48 w-full object-cover" src="{{ config('services.strapi.endpoint') . $post['attributes']['image']['data']['attributes']['formats']['small']['url'] }}">
        @endif
    </div>

    <div class="flex flex-1 flex-col justify-between bg-white p-6">
        <div class="flex-1">
            <p class="text-sm font-medium text-blue-500">
                @foreach($post['attributes']['tags']['data'] as $tag)
                <span class="mr-2">{{ $tag['attributes']['title'] }}</span>
                @endforeach
            </p>
            <a href="{{ route('blogs', ['slug' => $post['attributes']['slug']]) }}" class="mt-2 block">
                <p class="text-xl font-semibold text-gray-900">{{ $post['attributes']['title'] }}</p>
                <p class="mt-3 text-base text-gray-500">{{ $post['attributes']['shortDescription'] }}</p>
            </a>
        </div>

        <x-blog-author :author="$post['attributes']['author']['data']" :createdAt="$post['attributes']['createdAt']"/>
    </div>
</article>
