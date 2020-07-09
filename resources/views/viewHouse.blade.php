@extends("master")

@section("title", "ViewHouse")

@section("content")

{{ "Adresse: "}}  {{ $houses->address }} <br>
{{ "Pris: "}}  {{ $houses->price }} <br>
{{ "Beskrivelse: "}}  {{ $houses->description }} <br>
{{ "Navn på sælger: "}}  {{ $houses->name }} <br>
{{ "Kontant email: "}}  {{ $houses->email }}

<form action="/houseOverview" method="get">
    <button type="submit">Gå tilbage</button>
</form>
@endsection