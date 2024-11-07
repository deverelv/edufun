@extends('layouts.app')

@section('content')
    <h1>{{ $writer->name }}</h1>
    <p>Specialization: {{ $writer->specialization }}</p>
    <div class="row">
        @foreach ($writer->article as $article)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ url($article->image_path) }}" class="card-img-top" alt="{{ $article->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text">{{ $article->preview }}</p>
                        <a href="/article/{{ $article->id }}" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
