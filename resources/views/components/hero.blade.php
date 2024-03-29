@if ($hero)
    <div class="relative bg-gray-50">
        <main class="lg:relative">
            <div class="mx-auto w-full max-w-7xl pt-16 pb-20 text-center lg:py-48 lg:text-left">
                <div class="px-6 sm:px-8 lg:w-1/2 xl:pr-16">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-5xl">
                        <span class="block text-blue-850 xl:inline">{{ $hero['title'] }}</span>
                    </h1>
                    <p class="mx-auto mt-3 max-w-md text-lg text-gray-500 sm:text-xl md:mt-5 md:max-w-3xl">{{ $hero['description'] }}</p>
                </div>
            </div>
            <div class="relative h-64 w-full sm:h-72 md:h-96 lg:absolute lg:inset-y-0 lg:right-0 lg:h-full lg:w-1/2">
                @if($hero['image']['data'])
                    <img loading="lazy" class="absolute inset-0 h-full w-full object-cover" src="{{ config('services.strapi.endpoint') . $hero['image']['data']['attributes']['formats']['large']['url'] }}">
                @endif
            </div>
        </main>
    </div>
@endif
