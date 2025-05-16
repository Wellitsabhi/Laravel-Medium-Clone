<x-app-layout>
    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900 dark:text-gray-100">
                <x-category-tabs>NO category here</x-category-tabs>

                </div>
            </div>

            <div class="mt-8">
                @forelse ($posts as $p)
                   <x-post-item :post="$p" ></x-post-item>
                @empty
                    <div>
                        <p class="text-center text-white py-16"> No post found</p>
                    </div>
                @endforelse
            </div>
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
