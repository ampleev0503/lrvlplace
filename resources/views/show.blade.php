<a href="/places">На главную</a>

<hr>

<h2>{{$place->name}}</h2>

<hr>

@foreach($pictures as $picture)
    <img src="/storage/{{$picture->url}}" width="100" height="100">
@endforeach