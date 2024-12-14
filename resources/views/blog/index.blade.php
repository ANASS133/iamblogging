@extends('layouts.app')

@section('content')

<div class="blog-container">
    <div class="blog-header">
        <h1 class="blog-title">
           Blog Posts
        </h1>
    </div>
    @if (session()->has('message'))
        <div class="blog-message">
            <p>
                {{ session()->get('message') }}
            </p>
        </div>
    @endif

    @if (Auth::check())
        <div class="blog-create">
            <a href="/blog/create" class="create-post-btn">
                Create Post
            </a>
        </div>
    @endif
</div>
<br><br>

@foreach ($posts as $post)
<div class="blog-card alt">
    <div class="meta">
      <div class="photo"><img src="{{ asset('images/' . $post->image_path) }}" alt="hi"></div>
      <ul class="details">
        <li class="author"><a href="#">{{ $post->user->name }}</a></li>
        <li class="date">{{ date('jS M Y', strtotime($post->updated_at)) }}</li>
        <li class="tags">
          <ul>
            <li><a href="#">kultur</a></li>
            <li><a href="#">kunst</a></li>
            <li><a href="#">Geschichte</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="description">
      <h1>{{ $post->title }}</h1>
<p>{{ $post->description }}</p>
<p class="read-more">
        <a href="/blog/{{ $post->slug }}">Read More</a>
      </p>
    </div>
  </div>
  @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
    <span class="post-actions">
        <a href="/blog/{{ $post->slug }}/edit" class="edit-btn">Edit</a>
        
        <form action="/blog/{{ $post->slug }}" method="POST" class="delete-form">
            @csrf
            @method('delete')
            <button type="submit" class="delete-btn">Delete</button>
        </form>
    </span>
@endif

    </div>
  
@endforeach 
 <br><br><br><br><br><br><br>
@endsection



