@extends('layouts.app')

@section('content')
    <h1>All Posts</h1>

    {{-- Success message --}}
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('posts.create') }}">Create New Post</a>
    <hr>

    @forelse($posts as $post)
        <div style="border:1px solid #ccc; padding:10px; margin-bottom:10px;">
            <h3><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h3>
            <p>{{ Str::limit($post->body, 100) }}</p>
            
            <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
            
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @empty
        <p>No posts yet.</p>
    @endforelse
@endsection