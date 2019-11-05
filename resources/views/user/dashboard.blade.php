@extends('layouts.profile')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h4>Dashboard</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="clearfix container-fluid row">
                            <div class="col-xs-12 col-sm-6 col-md-4"><div class="panel widget center bgimage" style="margin-bottom:0;overflow:hidden;background-image:url('http://127.0.0.1:8000/admin/voyager-assets?path=images%2Fwidget-backgrounds%2F01.jpg');">
                                    <div class="dimmer"></div>
                                    <div class="panel-content">
                                        <i class="voyager-group"></i>        <h4>2000 views</h4>
                                    </div>
                                </div>
                            </div><div class="col-xs-12 col-sm-6 col-md-4"><div class="panel widget center bgimage" style="margin-bottom:0;overflow:hidden;background-image:url('http://127.0.0.1:8000/admin/voyager-assets?path=images%2Fwidget-backgrounds%2F02.jpg');">
                                    <div class="dimmer"></div>
                                    <div class="panel-content">
                                        <i class="voyager-news"></i> <h4>40 Posts</h4>
                                    </div>
                                </div>
                            </div><div class="col-xs-12 col-sm-6 col-md-4"><div class="panel widget center bgimage" style="margin-bottom:0;overflow:hidden;background-image:url('http://127.0.0.1:8000/admin/voyager-assets?path=images%2Fwidget-backgrounds%2F03.jpg');">
                                    <div class="dimmer"></div>
                                    <div class="panel-content">
                                        <i class="voyager-file-text"></i> <h4>5000 Ratings</h4>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix container-fluid row">
                            {!! $monthly_post->container() !!}
                            {!! $monthly_post->script() !!}
                        </div>
                        <div class="clearfix container-fluid row">
                            {!! $monthly_interactive_chart->container() !!}
                            {!! $monthly_interactive_chart->script() !!}
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
