<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 dark:text-gray-100">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-3xl font-semibold mb-4" style="color: white">Wall of {{ $user->name }}</h1>
                    <!-- Section : Biographie -->
                    <h2 class="text-2xl font-semibold mb-4" style="color: white">{{ $user->biography }}</h2>

                    {{-- @dump (Auth::check())
                    @dump  (Auth::user()->id)
                    @dump ($user->id) --}}

                    @if (Auth::check() && Auth::user()->id === $user->id)
                        <p class="text-left">Formulaire pour créer un nouveau post</p>
                        <div class="container">
                            @include('components.post-form')
                        </div>
                    @endif


                    <!-- Section : Affichage de tous les posts -->
                    @foreach ($user->posts as $post)
                        <x-post :post="$post"></x-post>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
