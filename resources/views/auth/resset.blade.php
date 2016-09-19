<!DOCTYPE html>
<form action="{{url('/password/reset')}}" method="POST">
    {!! csrf_field() !!}

    @if(count($errors) > 0)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <div>
        Email: <input type="email" name="email" value="{{old('email')}}">
    </div>
    <div>
        Password: <input type="password" name="password">
    </div>
    <div>
        Confirm password: <input type="password" name="password_confirmation" >
    </div>
    <div>
        <button type="submit">Reset password</button>
    </div>
</form>