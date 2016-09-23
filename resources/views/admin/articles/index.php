
    <ul>
        @foreach($articles as $article)
        <li>Name : {{$article->title}} | Author : {{$article->author}}</li>
        @endforeach
    </ul>
