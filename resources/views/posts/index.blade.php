@extends('layout')

@section('title', 'Posts')

@section('body')
    <a href="form.php">Add</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
        <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ $post->slug }}</td>
            <td>
                <a href="form.php?id={{ $post->id }}">Edit</a> |
                <a href="delete.php?id={{ $post->id }}">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection