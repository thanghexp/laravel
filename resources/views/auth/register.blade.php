<!DOCTYPE HTML>
<html>
<head>
    <title>Tạo Form đăng kí người dùng mới</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Đăng kí người dùng mới</h1>
    <form action="{{url('/auth/register')}}" method="POST">
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
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Name">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" placeholder="Email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="text" name="password" id="password" placeholder="Password">
        </div>
        <div>
            <label for="pass_confimation">Confirm password:</label>
            <input type="text" name="password_confirmation" id="pass_confimation" placeholder="Confirm Password">
        </div>
        <button type="sumit">Register</button>
    </form>
</body>
</html>