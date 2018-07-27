@extends('master')



@section('content')
    <table>
        <tr>
            <td>Название</td>
            <td>Тип</td>
        </tr>
        @foreach($places as $place)
            <tr>
                <td><a href="/places/{{$place->id}}">{{$place->name}}</a></td>
                <td>{{$place->t_name}}</td>
                <td><a href="/places/{{$place->id}}/photos/add">Добавить фото</a></td>
            </tr>
        @endforeach
    </table>
    <hr>
    <a href="/places/create">Добавить место</a>
@endsection