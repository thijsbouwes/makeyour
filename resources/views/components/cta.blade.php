@if ($cta)
<div class="relative bg-gray-900">
    <div class="relative h-80 overflow-hidden bg-blue-850 md:absolute md:left-0 md:h-full md:w-1/3 lg:w-1/2 bg-gray-50 flex items-center">
        <div class="px-8 lg:px-10">
            @if($cta['image']['data'])
                <img loading="lazy" class="w-full object-cover shadow-2xl rounded-xl" src="{{ config('services.strapi.endpoint') . $cta['image']['data']['attributes']['formats']['large']['url'] }}">
            @endif
        </div>
    </div>
    <div class="relative mx-auto max-w-7xl py-24 sm:py-32 lg:py-40 lg:px-8">
        <div class="pr-6 pl-6 md:ml-auto md:w-2/3 md:pl-16 lg:w-1/2 lg:pl-24 lg:pr-0 xl:pl-32">
            <p class="text-base font-semibold leading-7 text-blue-500">{{ $cta['subtitle'] }}</p>
            <h2 class="mt-2 text-4xl font-bold tracking-tight text-white">{{ $cta['title'] }}</h2>
            <p class="mt-6 text-base leading-7 text-gray-300">{{ $cta['description'] }}</p>
            <div class="mt-8">
                <a href="{{ $cta['buttonLink'] }}" class="inline-flex rounded-md bg-white/10 px-3.5 py-1.5 text-base font-semibold leading-7 text-white shadow-sm hover:bg-white/20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">{{ $cta['button'] }}</a>
            </div>
        </div>
    </div>
</div>
@endif
