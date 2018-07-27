@extends('master')



@section('content')

    @include('breadCrumbs')

    <h2>{{$place->name}}</h2>

    <hr>

    @foreach($pictures as $picture)
        <img src="/storage/{{$picture->url}}" width="100" height="100">
    @endforeach

    <form action="/places/{{$place->id}}/photos/add" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="place_id" value="{{$place->name}}" disabled>
        <input type="file" name="image">

        <input type="submit" value="Отправить">

    </form>
@endsection