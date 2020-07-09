@extends("master")

@section("title", "ViewHouses")

@section("content")

<form action="/houseOverview" method="post">
    <label for="searchFor">Søg efter huse af</label>
    <input type="text" name="searchFor"><br>
    {{ csrf_field() }}
    <button type="submit">Søg</button>
</form>
<form action="/houseOverview" method="get">
    <button type="submit">Se alle huse</button>
</form>

<ul>
    @foreach($houses as $house)
    <li>
        <strong>{{"Adresse: "}} {{ $house->address}}</strong>
        <br>
        {{"Pris: "}} {{(string)$house->price}}
        <br>
        {{"Beskrivelse: "}} {{ $house->description}}
        <br>
        {{ "Navn på sælger: "}} {{ $house->name}}
        <form action="/viewHouse" method="get">
            <input type="hidden" name="houseId" value="{{ $house->id }}">
            <button type="submit">Se huset</button>
        </form>
    </li>
    @endforeach
</ul>
<form action="/welcome" method="get">
    <button type="submit">Gå tilbage</button>
</form>

@endsection
