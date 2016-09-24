@extends('layout.admin.index')

@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">

            @if ( $errors->any() )
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">Message Error</h3>
                    </div>
                    <div class="panel-body">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                </div>
            @endif

            <div class="x_title">
                <h2>Create new a <b>Articles</b></h2>
                <div class="clearfix"></div>
            </div>
                <div class="x_content">
                    {!! Form::open(['action' => 'Admin\ArticlesController@store', 'method' => 'POST']) !!}
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">
                            {!! Form::label('title','Title:', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!} <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('title', '', ['class' => 'form-control col-md-7 col-xs-12']) !!} <br />
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="content">
                            {!! Form::label('content','Content:', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!} <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::textarea('content', '', ['class' => 'form-control col-md-7 col-xs-12']) !!} <br />
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">
                            {!! Form::label('author','Author:', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!} <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('author', '', ['class' => 'form-control col-md-7 col-xs-12']) !!} </br>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <hr>

                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        {!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}
                        {!! Form::reset('Cancel', ['class' => 'btn btn-primary']) !!}
                    </div>

                    {!! Form::close() !!}
                </div>
        </div>
    </div>



@endsection
