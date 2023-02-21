@extends('_layouts.main')

@section('body')
    <div class="p-8">
        <h1 class="text-3xl font-bold">Local Posts!</h1>
    </div>

    <hr>

    @foreach ($posts as $post)
        <div class="post-preview">
            <a href="{{ $post->getUrl() }}">
                <h2 class="post-title">{{ $post->title }}</h2>
            </a>
            <p class="post-meta">
                Posted by
                <a href="#!">{{ $post->author }}</a>
                on {{ date('D d M Y', $post->date) }}
            </p>
        </div>
    @endforeach

    <hr>
    <hr>

    <div class="p-8">
        <h1 class="text-3xl font-bold">Reddit Posts!</h1>
    </div>

    <hr>

    @foreach ($reddit as $post)
        <div class="post-preview">
            <a href="{{ $post->getUrl() }}">
                <h2 class="post-title">{{ $post->title }}</h2>
            </a>
            <p class="post-meta">
                Posted by
                <a href="#!">{{ $post->author }}</a>
                on {{ date('D d M Y', $post->date) }}
            </p>
        </div>
    @endforeach
@endsection
