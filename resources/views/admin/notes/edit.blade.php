<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form edit trong Laravel 5</title>

</head>
<body>
    <h1>Ma so bai viet : {!! $articles->id !!}</h1>
    {!! Form::model($articles,[ 'method' => 'PATCH', 'action' => ['ArticlesController@update', $articles->id] ]) !!}
    {!! Form::label('name','Name:') !!}
    {!! Form::text('title') !!} <br />

    {!! Form::label('author','Author:') !!}
    {!! Form::text('author') !!} </br>

    {!! Form::submit('Cap Nhat')!!}
    {!! Form::close() !!}
</body>
</html>