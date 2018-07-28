@extends('master')



@section('content')
    @include('breadCrumbs')
    <table>
        <tr>
            <td>Название</td>
            <td>Тип</td>
        </tr>
        @foreach($places as $place)
            <tr>
                <td><a href="{{route('showPlace', $place->id)}}">{{$place->name}}</a></td>
                <td>{{$place->t_name}}</td>
            </tr>
        @endforeach
    </table>
    <hr>

@endsection