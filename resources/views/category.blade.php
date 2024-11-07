@extends('layouts.app')

@section('content')
    <h1>Category: {{ $category->name }}</h1>
    <p>{{ $category->overview }}</p>
    <div class="row">
        @foreach ($category->article as $article)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ url($article->image_path) }}"/>
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <a href="/article/{{ $article->id }}" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
