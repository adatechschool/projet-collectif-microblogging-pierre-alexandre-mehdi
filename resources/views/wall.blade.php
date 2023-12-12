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
               
                                    <div class="container">
                                        @include('components.post-form')
                                    </div>
                               
            @endif


            <!-- Section : Affichage de tous les posts -->
                @foreach (Auth::user()->posts as $post)
                    <div class="">
                        <div class="mt-6">
                            <div class="max-w-4xl px-10 py-6 bg-white rounded-lg shadow-md">
                                <div><a href="#" class="flex items-center"><img
                                            src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                            alt="avatar"
                                            class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                                        <h1 class="font-bold text-gray-700 hover:underline">{{ $post->user->name }}</h1>
                                    </a></div>
                                <div class="mt-2">
                                    <p class="mt-2 text-gray-600">{{ $post->content }}</p>
                                    @if ($post->image)
                                        <img src={{ $post->image }} style="max-width: 300px; max-height: 200px;">
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>
</x-app-layout>
