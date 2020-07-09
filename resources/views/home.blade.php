@extends("master")

@section("title", "Homepage")

@section("content")

<form action="/" method="post">
    <label for="email">Email</label><br>
    <input type="text" name="email"><br>
    <label for="password">Kodeord</label><br>
    <input type="password" name="password"><br><br>
    {{ csrf_field() }}
    <button type="submit" value="login">Login</button>
</form>

<form action="/createUser" method="get">
    <button type="submit" value="createUser">Opret bruger</button>
</form>

@endsection