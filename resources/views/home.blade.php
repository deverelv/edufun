@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach ($articles as $article)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ $article->image_path }}" class="card-img-top" alt="{{ $article->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text">{{ $article->preview }}</p>
                        <p class="card-text"><small>Written by {{ $article->writer->name }} on {{ $article->post_date }}</small></p>
                        <a href="/article/{{ $article->id }}" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
