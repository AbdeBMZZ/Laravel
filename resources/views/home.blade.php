@extends('master.layout')

@section('title')
    Accueil
@endsection

@section('content')
    <div class="row my-5">
        <div class="col-md-8">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif  
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4 mb-2">
                        <div class="card h-100">
                            <img src="{{ asset($post->image) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <h6 class="card-title">{{ $post->user ? $post->user->name : null }}</h6>

                                <p class="card-text">{{ Str::limit($post->body, 100)}}</p>
                                <a href="{{ route('post.show', $post->slug) }}" class="btn btn-primary">Voir</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- 
            get the user from auth()->user()

            @foreach ($users as $user)
                @if ($user->post)
                    <p>{{ $post->body }}</p>
                @else
                    <p> no posts</p>
            
                @endif
            @endforeach

                --}}


            <div class="d-flex justify-content-center my-4">
                {{ $posts->links() }}

            </div>
        </div>
    </div>
@endsection