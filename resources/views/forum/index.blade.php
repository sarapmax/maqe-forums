@extends('layout')

@section('content')
    <div class="container mx-auto py-4">
        <h1 class="font-bold text-4xl">MAQE - Forums</h1>
        <h3 class="text-2xl">Subtitle</h3>

        <div class="mt-2">
            <h4 class="text-xl">Posts</h4>

            <div class="mt-4">
                @foreach($posts as $post)
                    @include('forum._single-post', [
                        'post' => $post
                    ])
                @endforeach
            </div>

            <div class="flex justify-center mt-8">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
