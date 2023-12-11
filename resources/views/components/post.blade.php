

<div class="mt-6">
    <div class="max-w-4xl px-10 py-6 bg-white rounded-lg shadow-md">
        <div><a href="#" class="flex items-center"><img
                    src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                    alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
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
