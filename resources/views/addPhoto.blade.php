@extends('master')



@section('content')

    @include('breadCrumbs')

    <form action="{{route('uploadFormAddPhoto')}}" method="post" enctype="multipart/form-data">
        @csrf
        <select name="place_id">
            @foreach($places as $place)

                @if (old('place_id') == $place->id)
                    <option value="{{$place->id}}" selected>{{$place->name}}</option>
                @else
                    <option value="{{$place->id}}">{{$place->name}}</option>
                @endif

            @endforeach
        </select>
        <input type="file" name="image">
        <input type="submit" value="Отправить">
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