@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>

    {{-- Validation errors --}}
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ old('title', $post->title) }}" required maxlength="255">
        <br><br>
        <textarea name="body" required>{{ old('body', $post->body) }}</textarea>
        <br><br>
        <button type="submit">Update Post</button>
    </form>

    <br>
    <a href="{{ route('posts.show', $post->id) }}">Back to Post</a>
@endsection