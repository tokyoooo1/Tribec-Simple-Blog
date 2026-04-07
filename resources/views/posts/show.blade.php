@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>

    <hr>

    <h3>Comments</h3>

    {{-- Success message --}}
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    {{-- List all comments --}}
    @forelse($post->comments as $comment)
        <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 5px;">
            <strong>{{ $comment->author }}:</strong>
            <p>{{ $comment->body }}</p>

            {{-- Delete comment form --}}
            <form action="{{ route('comments.destroy', $comment->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete Comment</button>
            </form>
        </div>
    @empty
        <p>No comments yet.</p>
    @endforelse

    <hr>

    {{-- Add new comment form --}}
    <h4>Add a Comment</h4>
    <form action="{{ route('comments.store', $post->id) }}" method="POST">
        @csrf
        <input type="text" name="author" placeholder="Your Name" required maxlength="100">
        <br><br>
        <textarea name="body" placeholder="Comment" required></textarea>
        <br><br>
        <button type="submit">Submit Comment</button>
    </form>
@endsection