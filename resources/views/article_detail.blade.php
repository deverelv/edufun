@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $article->title }}</h1>
        <p><small>Written by {{ $article->writer->name }} on {{ $article->post_date }}</small></p>
        
        <img src="{{ url($article->image_path) }}" alt="{{ $article->title }}" class="img-fluid mb-3">

        <p>{{ $article->content }}</p>

        <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
