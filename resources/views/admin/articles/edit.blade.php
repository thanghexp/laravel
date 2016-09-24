@extends('layout.admin.index')

@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Update <small>Articles</small></h2>
                <div class="clearfix"></div>
            </div>
            @if(isset($row_article))
                <div class="x_content">
                    {!! Form::open(['url' => 'Admin/articles/' . $row_article->id, 'method' => 'PUT']) !!}
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">
                            {!! Form::label('title','Title:', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!} <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            {!! Form::text('title', $row_article->title, ['class' => 'form-control col-md-7 col-xs-12']) !!} <br />
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="content">
                            {!! Form::label('content','Content:', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!} <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            {!! Form::textarea('content', $row_article->content, ['class' => 'form-control col-md-7 col-xs-12']) !!} <br />
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    {{--<div class="item form-group">--}}
                    {{--<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">--}}
                    {{--{!! Form::label('author','Author:', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!} <span class="required">*</span>--}}
                    {{--</label>--}}
                    {{--<div class="col-md-9 col-sm-9 col-xs-12">--}}
                    {{--{!! Form::text('author', $row_article->author, ['class' => 'form-control col-md-7 col-xs-12']) !!} </br>--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    <div class="clearfix"></div>
                    <hr>

                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
                        {!! Form::reset('Cancel', ['class' => 'btn btn-primary']) !!}
                    </div>

                    {!! Form::close() !!}
                </div>
            @endif
        </div>
    </div>


    @if ( $errors->any() )
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection
