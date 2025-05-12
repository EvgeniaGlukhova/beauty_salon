@extends('layout')
@section('content')

    <div class="container mt-5">
        <h2 class="mb-4">Редактирование услуги</h2>

        <form method="POST" action="{{ url('/services/update', $service->id) }}">
            @csrf

            <div class="mb-3">
                <label class="form-label">Наименование</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                       value="{{ old('name', $service->name) }}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Цена</label>
                <input type="text" name="price" class="form-control @error('price') is-invalid @enderror"
                       value="{{ old('price', $service->price) }}">
                @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label class="form-label">Косметолог</label>
                <select name="cosmetologist_id" class="form-select @error('cosmetologist_id') is-invalid @enderror">
                    <option disabled selected>Выберите косметолога</option>
                    @foreach($cosmetologists as $cosmetologist)
                        <option value="{{ $cosmetologist->id }}"
                            {{ old('cosmetologist_id', $service->cosmetologist_id) == $cosmetologist->id ? 'selected' : '' }}>
                            {{ $cosmetologist->name }}
                        </option>
                    @endforeach
                </select>
                @error('cosmetologist_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Обновить услугу</button>
        </form>
    </div>

@endsection
