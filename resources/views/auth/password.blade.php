<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Back-up Password</h1>
    <form action="{{url('/auth/login')}}" method="POST">
        <ul>
            @foreach($errors as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        <div>
            <label for="Email">Email:</label>
            <input type="Email" name="email" id="email" placeholder="Email">
        </div>
        <div>
            <button type="submit">Post link password</button>
        </div>
    </form>
</body>
</html>