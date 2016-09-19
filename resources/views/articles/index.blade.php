<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<ul>
    @foreach($articles as $article)
        <li>Name : {{$article->title}} | Author : {{$article->author}}</li>
    @endforeach
</ul>
</body>
</html>