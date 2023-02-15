<div class="mt-6 flex items-center">
    <div class="flex-shrink-0">
        @if ($author)
            <span class="sr-only">{{ $author['attributes']['firstname'] }} {{ $author['attributes']['lastname'] }}</span>
        @endif
        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
    </div>
    <div class="ml-3">
        @if ($author)
            <p class="text-sm font-medium text-gray-900">
                <a href="#" class="hover:underline">{{ $author['attributes']['firstname'] }} {{ $author['attributes']['lastname'] }}</a>
            </p>
        @endif
        <div class="flex space-x-1 text-sm text-gray-500">
            <time datetime="2020-03-16">Mar 16, 2020</time>
        </div>
    </div>
</div>
