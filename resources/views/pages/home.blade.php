<x-layout>
    <x-slot:title>@lang('nav.home')</x-slot:title>

    <x-hero :hero="$homePage['attributes']['hero']"/>

    <x-blog-section :title="$homePage['attributes']['blogIntroTitle']" :description="$homePage['attributes']['blogIntroDescription']" :posts="$posts"/>
</x-layout>
