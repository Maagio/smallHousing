@extends("master")

@section("title", "Homepage")

@section("content")

{{ "Create a house here"}}

<form action="/createHouse" method="post">
    <label for="address">Adresse</label><br>
    <input type="text" name="address"><br>
    <label for="price">Pris</label><br>
    <input type="text" name="price"><br>
    <label for="description">Beskrivelse</label><br>
    <textarea class="FormElement" name="description" cols="40" rows="4"></textarea><br>
    {{ csrf_field() }}
    <button type="submit">Opret</button>
</form>
@endsection