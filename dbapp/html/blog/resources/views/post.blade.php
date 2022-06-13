@extends('layout')

@section('title', 'Post')

@section('content')

    <div class="card mt-3">
        <div class="card-body">
            {{ $post->content }}
        </div>
        <div class="card-footer text-muted">
            {{$post->user->name}}
            {{$post->created_at->diffForHumans()}}
        </div>
    </div>
    @foreach($post->comments as $comment)
    <div class="alert alert-dark mt-3">
        {{$comment->content}} <br>
        <small>{{$comment->user->name}}<br>
            {{$comment->created_at->diffForHumans()}};
        </small>
    </div>
    @endforeach
@endsection
