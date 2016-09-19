<!DOCTYPE html>
<html>
<head>
    <title>Login System</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="{{url('/auth/login')}}">
        {!! csrf_field() !!}
        @if(count($errors) > 0)
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div>
            <label for="Email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Password">
        </div>
        <div>
            <input type="checkbox" name="remember"> Remember password
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>