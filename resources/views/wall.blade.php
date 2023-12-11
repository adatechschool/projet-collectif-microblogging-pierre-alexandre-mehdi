<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-3xl font-semibold mb-4" style="color: white">Wall of {{ Auth::user()->name }}</h1>
            <!-- Section : Biographie -->
            <h2 class="text-2xl font-semibold mb-4" style="color: white">{{ Auth::user()->biography }}</h2>

            @if (auth()->check())
                <!-- Section : Formulaire création d'un nouveau post -->
                <h1 class="text-2xl font-semibold mb-6 mt-6" style="color: white">Send a New Post</h1>
                <!-- Formulaire pour créer un nouveau post -->
                <!-- ... -->
            @endif


            <!-- Section : Affichage de tous les posts -->
                @foreach (Auth::user()->posts as $post)
                    <x-post :post="$post"></x-post>
                @endforeach
            </div>
    </div>
</x-app-layout>
