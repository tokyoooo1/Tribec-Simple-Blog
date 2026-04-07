@extends('layouts.app')

@section('content')
    <h1>Create New Post</h1>

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

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title" value="{{ old('title') }}" required maxlength="255">
        <br><br>
        <textarea name="body" placeholder="Body" required>{{ old('body') }}</textarea>
        <br><br>
        <button type="submit">Create Post</button>
    </form>

    <br>
    <a href="{{ route('posts.index') }}">Back to Posts</a>
@endsection