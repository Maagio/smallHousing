@extends("master")

@section("title", "CreateUser")

@section("content")
<form action="/createUser" method="post">
    <p>Navn</p>
    <input type="text" name="name"><br>
    <p>Email</p>
    <input type="text" name="email"><br>
    <p>Kodeord</p>
    <input type="password" name="password"><br><br>
    {{ csrf_field() }}
    <button type="submit" value="login">Opret</button>
</form>

@endsection