@extends('layouts.app')

@section('content')
<br><br><br><br>
<div class="post-detail-container"> 
    <div class="post-header">
        <h1 class="post-title">{{ $post->title }}</h1>
    </div>

    <div class="post-image-container">
        <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}" class="post-image">
    </div>

    <div class="post-meta">
        <span class="post-author">By <span class="author-name">{{ $post->user->name }}</span></span>
        <span class="post-date">Created on {{ date('jS M Y', strtotime($post->updated_at)) }}</span>
    </div>

    <div class="post-description">
        <p>{{ $post->description }}</p>
    </div>
</div><br><br><br><br>

@endsection
