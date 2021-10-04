@extends('layout')

@section('title', 'Categories')

@section('body')
    <form method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" @isset($category) value="{{ $category->title }}" @endisset>
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" name="slug" class="form-control" id="slug" @isset($category) value="{{ $category->slug }}" @endisset>
        </div>
        <div class="mb-3">
            <label for="select1" class="form-label">Posts</label>
            <select name="Posts[]" class="form-select" id="select1" multiple aria-label="multiple select example">
                @foreach($posts as $post)
                    @if(in_array($post->id, $selected_posts))
                        <option selected value="{{$post->id}}">{{$post->title}}</option>
                    @else
                        <option value="{{$post->id}}">{{$post->title}}</option>
                    @endif
                @endforeach
            </select>
        </div>

        @isset($category)
            <input type="hidden" name="id" value="{{ $category->id }}">
        @endisset

        <input type="submit" class="btn btn-primary" value="Save"/>
    </form>
@endsection