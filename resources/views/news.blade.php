<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 dark:text-gray-100">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="mb-8 text-3xl font-semibold">Cheesiest news of the wonder world of Raclette</h1>
                    <div class="grid grid-cols-3 gap-6 ">
                        @foreach ($posts as $post)
                            <x-post :post="$post"></x-post>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

</x-app-layout>
