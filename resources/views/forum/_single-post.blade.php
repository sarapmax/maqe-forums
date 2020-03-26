<div class="p-4 flex border border-gray-400 rounded mb-4 shadow">
    <div class="w-4/5 flex">
        <img src="{{ $post->image_url }}" alt="{{ $post->title }}" class="w-64">
        <div class="px-4">
            <h3 class="font-medium text-xl">{{ $post->title }}</h3>
            <p class="text-gray-700 mt-2">{{ $post->body }}</p>
            <p class="mt-4 text-gray-500 flex items-center font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z"/>
                    <path
                        d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm1-8h4v2h-6V7h2v5z"
                        fill="rgba(160,174,192,1)"/>
                </svg>
                <span class="ml-1">{{ $post->created_at->diffForHumans() }}</span>
            </p>
        </div>
    </div>
    <div class="border-l border-gray-400 px-4 w-1/5">
        <img src="{{ $post->author->avatar_url }}" alt="{{ $post->author->name }}" class="rounded-full w-24 mx-auto">
        <div class="text-center mt-3">
            <h3 class="text-red-600 font-medium">{{ $post->author->name }}</h3>
            <p class="mt-2">{{ $post->author->role }}</p>
            <p class="text-gray-700 mt-1 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z"/>
                    <path
                        d="M18.364 17.364L12 23.728l-6.364-6.364a9 9 0 1 1 12.728 0zM12 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"
                        fill="rgba(74,85,104,1)"/>
                </svg>
                <span class="ml-1">{{ $post->author->place }}</span>
            </p>
        </div>
    </div>
</div>
