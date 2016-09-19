@if(Auth::check())
    Hello, {{Auth::user()->name}}
    <a href="/auth/logout">Logout</a>
    <h3>Information user</h3>
    <ul>
        <li>Name: {{Auth::user()->name}}</li>
        <li>Email: {{Auth::user()->email}}</li>
    </ul>
@else
   Hello, please <a href="/auth/login">Login</a>
    or <a href="/auth/register">Register</a>
@endif