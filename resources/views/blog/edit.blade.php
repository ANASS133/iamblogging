@extends('layouts.app')

@section('content')
<div class="update-container">
    <!-- Update Header -->
    <div class="update-header">
        <h1 class="update-title">
            Update Post
        </h1>
    </div>

    <!-- Error Message Section -->
    @if ($errors->any())
        <div class="update-errors">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Update Form -->
    <div class="update-form">
        <form 
            action="/blog/{{ $post->slug }}"
            method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input 
                type="text"
                name="title"
                value="{{ $post->title }}"
                class="update-input"
                placeholder="Title...">

            <textarea 
                name="description"
                class="update-textarea"
                placeholder="Description...">{{ $post->description }}</textarea> 

            <button type="submit" class="update-submit-btn">
                Submit Post
            </button>
        </form>
    </div>
</div>

@endsection
