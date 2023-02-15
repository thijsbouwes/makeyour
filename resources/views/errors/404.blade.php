<x-layout>
    <x-slot:title>@lang('message.notFound')</x-slot:title>

    <main class="grid min-h-full place-items-center bg-white py-24 px-6 sm:py-32 lg:px-8">
        <div class="text-center">
            <p class="text-base font-semibold text-blue-850">404</p>

            <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">@lang('message.notFound')</h1>
            <p class="mt-6 text-base leading-7 text-gray-600">@lang('message.notFoundDescription')</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="{{ route('home') }}" class="rounded-md bg-blue-850 px-3.5 py-2.5 text-sm hover:bg-opacity-75 font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">@lang('action.backHome')</a>
            </div>
        </div>
    </main>
</x-layout>
