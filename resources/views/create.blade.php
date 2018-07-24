<a href="/places">На главную</a>

<hr>

<h2>Создать место</h2>

<form action="/places/create" method="post">
    @csrf
    <input type="text" name="name" value="{{old('name')}}">
    <select name="type_id">
        @foreach($types as $type)
            <option value="{{$type->t_id}}">
                {{$type->t_name}}
            </option>
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