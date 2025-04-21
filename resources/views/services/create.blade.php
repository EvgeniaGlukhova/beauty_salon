<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-21 </title>
    <style>
        .is-invalid
        {
            color: red;
        }
    </style>
</head>
<body>
<h2>Добавление услуги</h2>

<form method="post" action={{ url('store')}} />
    @csrf
    <label>Наименование</label>
    <input type="text" name="name" value="{{ old('name') }}"/>
    @error('name')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
<br>
    <label>Цена</label>
    <input type="text" name="price" value="{{ old('price') }}"/>
    @error('price')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
<br>
    <label>Косметолог</label>
    <select name="cosmetologist_id" value="{{ old('$cosmetologist_id') }}">
        <option style="">
        @foreach($cosmetologists as $cosmetologist)
            <option value="{{ $cosmetologist->id }}"
                @if(old('cosmetologist_id') == $cosmetologist->id) selected
                    @endif>{{ $cosmetologist->name }}
            </option>
        @endforeach
    </select>
    @error('cosmetologist_id')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
<br>
    <button type="submit">Добавить услугу</button>


</body>
</html>

