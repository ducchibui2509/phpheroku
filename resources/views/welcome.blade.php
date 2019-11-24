@extends('layouts/master')
@section('body')
    <div class="container">
        <div class="row">
            @foreach($navmenus as $navmenu)
                <div class="col-sm-4">

                    <section class="card mb-5" id="{{$navmenu->name}}">
                        <a href="/pages/{{$navmenu->link}}">
                            <img class="card-img-top" src="storage/images/{{$navmenu->imagefilename}}"
                                 alt="{{$navmenu->name}} Photos">
                        </a>
                        <div class="card-body">
                            <h2 class="card-title">{{$navmenu->title}}</h2>
                            <h5 class="card-subtitle">{{$navmenu->subtitle}}</h5>
                            <p class="card-text">{{$navmenu->description}}</p>
                        </div>
                        <a class="btn btn-info" href="/posts/{{$navmenu->link}}">
                            Add Post
                        </a>
                    </section><!-- card -->

                </div>
            @endforeach

        </div>
    </div>
@endsection
