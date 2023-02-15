<div class="relative bg-gray-50 px-6 pb-20 lg:px-8 lg:pb-28 mt-20 lg:mt-28">
    <div class="absolute inset-0">
        <div class="h-1/3 bg-white sm:h-2/3"></div>
    </div>
    <div class="relative mx-auto max-w-7xl">
        <div class="text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Inspiratie en geschenkideeën</h2>
            <p class="mx-auto mt-3 max-w-2xl text-xl text-gray-500 sm:mt-4">Onze blog biedt een breed scala aan gepersonaliseerde geschenkideeën die je kunt aanpassen aan de interesses en persoonlijkheid van de ontvanger.</p>
        </div>
        <div class="mx-auto mt-12 grid max-w-lg gap-5 lg:max-w-none lg:grid-cols-3">
            @foreach($blogs as $blog)
                <x-blog-card :blog="$blog"/>
            @endforeach
        </div>
    </div>
</div>
