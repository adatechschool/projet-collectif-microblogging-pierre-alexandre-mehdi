<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 dark:text-gray-100">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex items-center">
                        <img class="h-28 w-28 rounded-full" src="{{ $user->profilPicture }}" />
                        <div class="ml-3">
                            <a href="{{ route('wall', ['slug' => $user->slug]) }}"
                                class=" text-3xl font-semibold antialiased block leading-tight text-black">{{ $user->name }}</a>
                        </div>
                    </div>
                    <!-- Section : Biographie -->
                    <h2 class="text-2xl ml-12 mt-4 mb-4 text-black dark:text-white">{{ $user->biography }}</h2>


                    <!-- Section : Formulaire pour ajouter un post -->
                    @if (Auth::check() && Auth::user()->id === $user->id)
                        <div class="container m-10">
                            @include('components.post-form')
                        </div>
                    @endif

                    <!-- Section : Affichage de tous les posts en format grille -->
                    <div class="grid grid-cols-3 gap-4">
                        @foreach ($user->posts as $post)
                            <x-post :post="$post"></x-post>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
