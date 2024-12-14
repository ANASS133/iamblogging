@extends('layouts.app')

@section('content')
<center>
<div class="create-container">
    <div class="create-header">
        <h1>Create Post</h1>
    </div>
<br>
    @if ($errors->any())
        <div class="create-error-container">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<br>
    <div class="create-form-container">
        <form action="/blog" method="POST" enctype="multipart/form-data">
            @csrf

            <input 
                type="text" 
                name="title" 
                placeholder="Title..." 
                class="create-input-field">
<br><br>
            <textarea 
                name="description" 
                placeholder="Description..." 
                class="create-textarea-field"></textarea>

            <div class="create-file-input">
                <label class="create-file-label">
                    <span>Select a image</span>
                    <input 
                        type="file" 
                        name="image" 
                        class="create-file-field">
                </label>
            </div>
<br>
            <button type="submit" class="create-submit-btn">Submit Post</button>
        </form>
    </div>
</div></center>
@endsection