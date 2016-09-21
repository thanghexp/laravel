@extends('layout.admin.index')

@section('content')
    {{--['method' => 'POST', 'url' => 'articles/store']--}}
    {!! Form::open() !!}
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
        {!! Form::reset('Cancel', ['class' => 'btn btn-primary']) !!}
        {!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}
    </div>

    {!! Form::close() !!}

    @if ( $errors->any() )
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection
