@extends('master')



@section('content')
    @include('breadCrumbs')

    <h2>Создать место</h2>

    <form action="{{route('uploadFormCreatePlace')}}" method="post">
        @csrf
        <input type="text" name="name" value="{{old('name')}}">
        <select name="type_id">
            @foreach($types as $type)
                @if (old('type_id') == $type->t_id)
                    <option value="{{$type->t_id}}" selected>{{$type->t_name}}</option>
                @else
                    <option value="{{$type->t_id}}">{{$type->t_name}}</option>
                @endif
            @endforeach
        </select>
        <input type="submit" value="Создать">

    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection