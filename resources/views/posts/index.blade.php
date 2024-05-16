<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .post-border{
        border: 1px solid;
        margin: 20px;
        padding: 10px;
        text-align: center;
    }

</style>
<body>
    
</body>
</html>


@extends('layouts.header')

@section('content')
<div class="container">
    
    @foreach($posts as $post)
        <div class = "post-border">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <p>Category: {{ $post->category->name }}</p>
            <p>Author: {{ $post->user->name }}</p>
            <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </div>
    @endforeach
</div>
@endsection
