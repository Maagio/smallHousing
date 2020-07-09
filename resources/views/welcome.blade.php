@extends("master")

@section("title", "WelcomePage")

@section("content")

{{ "Velkommen" }}

<form action="/createHouse" method="get">
    <input type="hidden" name="userId" value="{{ $user->id }}">
    <button type="submit">Opret Hus</button>
</form>
<br>
<form action="/houseOverview" method="get">
    <button type="submit">Se huse</button>
</form>
<br>
<form action="/home" method="get">
    <button type="submit">Log ud</button>
</form>
@endsection