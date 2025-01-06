<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
            @if(auth()->id() == $post->user_id)
                <br />
                <a href="{{ route('posts.edit', ['post' => $post->id]) }}">Update</a>
                <br />
                <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            @endif
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <div class="mb-4">
                        <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
                        <p>
                            {{ $post->content }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
