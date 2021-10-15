@extends('master.layout')

@section('title')
    Accueil
@endsection

@section('content')
    <div class="row my-5">
        <div class="col-md-8">
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://cdn.pixabay.com/photo/2020/06/06/12/34/cartoon-5266407__340.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post['title'] }}</h5>
                                <p class="card-text">{{ $post['body']}}</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
        </div>
    </div>
@endsection