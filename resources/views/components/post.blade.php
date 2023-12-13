<div class="bg-white border rounded-sm max-w-md relative">
    <div class="flex items-center justify-between px-4 py-3">
        <div class="flex items-center">
            <img class="h-8 w-8 rounded-full" src="https://picsum.photos/id/1027/150/150" />
            <div class="ml-3">
                <a href="{{ route('wall', ['slug' => $post->user->slug]) }}"
                    class="text-sm font-semibold antialiased block leading-tight text-black">{{ $post->user->name }}</a>
            </div>
        </div>
        <!-- Bouton de suppression en haut à droite -->
        @if ($post->user->id === Auth::id())
            <form action="{{ route('posts.destroy', ['id' => $post->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <span class="sr-only">Close menu</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </form>
        @endif
    </div>
    @if ($post->image)
        <img src="{{ $post->image }}" />
    @endif
    <div class="flex items-center justify-between mx-4 mt-3 mb-2 text-black">
        <p>{{ $post->content }}</p>
    </div>
</div>
