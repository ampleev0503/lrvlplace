@extends('master')



@section('content')

    <ul>
        <li><a href="{{route('showAllPlaces')}}">Все места</a></li>
        <li><a href="{{route('createPlace')}}">Добавить место</a></li>
        <li><a href="{{route('addPhoto')}}">Добавить фото</a></li>
    </ul>

@endsection