@extends('layouts/master')
@section('body')
    <div class="container">
        <div class="row">
            @foreach($posts as $post)
                @if($post->category_id == 1)
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
                                    <h5 class="card-subtitle ">Chevrolet</h5>
                                    <p class="card-text text-truncate text-md-left">{{$post->body}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item">
                                        <form class="form-inline">
                                            <button class="btn btn-primary">Add comment</button>
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
