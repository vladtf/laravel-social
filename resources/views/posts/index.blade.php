@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Posts</h1>
        @if($posts->count() < 1)
            <h2>Nothing to see here. Go follow someone.</h2>
        @else
        @foreach($posts as $post)
            <div class="row">
                <div class="col-6 offset-3">
                    <a href="/profile/{{ $post->user->id }}">
                        <img src="/storage/{{$post->image}}" class="w-100">
                    </a>
                </div>
            </div>
            <div class="row pt-2 pb-4">
                <div class="col-6 offset-3">
                    <div>
                        <p/>
                        <p><span class="font-weight-bold">
                        <a class="pr-2" href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </span>{{ $post->caption }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
        @endif
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $posts -> links() }}
            </div>
        </div>
    </div>
@endsection
