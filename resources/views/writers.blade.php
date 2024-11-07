@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Writers</h1>
        <div class="row">
            @foreach ($writers as $writer)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $writer->name }}</h5>
                            <p class="card-text">Specialization: {{ $writer->specialization }}</p>
                            <a href="/writers/{{ $writer->id }}" class="btn btn-primary">View Articles by {{ $writer->name }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
