<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-21</title>
    <style>
        .is-invalid
        {
            color: red;
        }
    </style>
</head>
<body>
<h2>Редактирование услуги</h2>

<form method="POST" action="{{ url('update', $service->id) }}"/>
    @csrf

    <label >Наименование</label>
<input type="text" name="name" value="@if (old('name')) {{ old('name')}} @else {{$service->name}} @endif " />
    @error('name')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
<br>
    <label >Цена</label>
    <input type="text" name="price"  value="@if (old('price')) {{ old('price')}} @else {{$service->price}} @endif" />
    @error('price')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
<br>
    <label>Косметолог</label>
    <select name="cosmetologist_id" value=" {{ old('cosmetologist_id') }}">
        <option style="">
        @foreach($cosmetologists as $cosmetologist)
            <option value="{{ $cosmetologist->id }}"
                    @if(old('cosmetologist_id'))
                        @if(old('cosmetologist_id') == $cosmetologist->id) selected @endif
                @else
                    @if($service->cosmetologist_id == $cosmetologist->id) selected @endif
            @endif >{{$cosmetologist->name}}
            </option>
        @endforeach
    </select>
    @error('cosmetologist_id')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>

    <button type="submit">Обновить услугу</button>

</body>
</html>

