@extends('template.master')

@section('content')
	<h1>Them Bai Viet Moi</h1>
	{!! Form::open() !!}
	{!! Form::label('name','Name:') !!}
	{!! Form::text('name') !!} <br />

	{!! Form::label('author','Author:') !!}
	{!! Form::text('author') !!} </br>

	{!! Form::label('created_at','Created Date:') !!}
	{!! Form::input('date', 'created_at') !!} <br />

	{!! Form::submit('Them moi')!!}
	{!! Form::close() !!}

	@if ( $errors->any() )
	    <ul>
	        @foreach ($errors->all() as $error)
	            <li>{{ $error }}</li>
	        @endforeach
	    </ul>
	@endif
@stop