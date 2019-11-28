@extends('layouts/master')
@section('body')
    <div class="container">
        <div class="row">
            @foreach($posts as $post)
                @if($post->category_id == 5)
                    <div class="col-sm-4 border-top border-right border-left border-bottom border-success">
                        <h3 class="card-title">{{$post->title}}</h3>
                        <div class="card mb-3">
                            <img class="card-img-top" src="{{url('/')."/storage/".$post->image}}" alt="{{$post->slug}}">
                        </div>
                    </div>
                    <div class="col-sm-8 border-top border-right border-bottom border-success">
                        <div class="row">
                            <div class="col border-bottom border-success">
                                <div class="card-body ">
                                    <h5 class="card-subtitle ">{{$post->seo_title}}</h5>
                                    <p class="card-text text-truncate text-md-left">{{$post->body}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-8">
                                <h3></h3>
                                <p class="card-text">Beautiful, clean, quiet 2BR high-rise condo avail two
                                    months January and February 2020. Rent includes all utilities, including wifi, one
                                    parking
                                    space, use of building gym, pool, sauna, Efficient elevator</p>
                            </div>
                            <div class="col-4 border-left border-secondary">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item">
                                        <form class="form-inline" method="get" action="{{url('/posts/'.$post->id.'/edit')}}">
                                            {{ csrf_field() }}
                                            <input class="btn btn-primary" type ="submit" value ="Update Post">
                                        </form>
                                    </a>
                                    <a class="list-group-item">
                                        <form class="form-inline">
                                            <button class="btn btn-primary">Delete Post</button>
                                        </form>
                                    </a>
                                    <a class="list-group-item">
                                        <form class="form-inline">
                                            <button class="btn btn-primary">Show Reviews</button>
                                        </form>
                                    </a>
                                    <a class="list-group-item">
                                        <form class="form-inline">
                                            <button class="btn btn-primary">Add Reviews</button>
                                        </form>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            <!-- card -->
            @endforeach
        </div>
    </div>
@endsection
