@extends('master.layout')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    <div class="row my-5">
        <div class="col-md-8 mb-2">
            <div class="row">
                <div class="col-md-12 mb-2">
                    <div class="card h-100">
                        <img src="{{ asset($post->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <h6 class="card-title">{{ $post->user ? $post->user->name : null }}</h6>
                            <p class="card-text">{{ $post->body }}</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection