@extends('layout')

@section('content')
    <div class="row justify-content-center">
        <h2>Добавление услуги</h2>
        <div class="col-4">

            @can('create-service')
            <form method="POST" action="{{ url('services/store') }}">
                @csrf
                <div class="md-3">
                    <label for="name" class="form-label">Наименование</label>
                    <input type="text" class="form-control @error('name') aria-invalid= @enderror"
                           id="name" name="name" aria-describedby="nameHelp" value="{{ old('name') }}"/>
                    <div id="nameHelp" class="form-text">Введите наименование услуги</div>
                    @error('name')
                    <div class="is-invalid">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <div class="md-3">
                    <label for="price" class="form-label">Цена</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror"
                           id="price" name="price" aria-describedby="priceHelp" value="{{ old('price') }}"/>
                    <div id="priceHelp" class="form-text">Введите цену услуги в рублях</div>
                    @error('price')
                    <div class="is-invalid">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <div class="mb-3">
                    <label for="cosmetologist" class="form-label">Косметолог</label>
                    <select class="form-select" id="cosmetologist" name="cosmetologist_id" aria-describedby="cosmetologistHelp" value="{{ old('$cosmetologist_id') }}">
                        <option style="">
                        @foreach($cosmetologists as $cosmetologist)
                            <option value="{{ $cosmetologist->id }}"
                                    @if(old('cosmetologist_id') == $cosmetologist->id) selected @endif>
                                {{ $cosmetologist->name }}
                            </option>
                        @endforeach
                    </select>
                    <div id="cosmetologistHelp" class="form-text">Выберите косметолога услуги</div>
                    @error('cosmetologist_id')
                    <div class="is-invalid">{{ $message }}</div>
                    @enderror
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Добавить услугу</button>
            </form>
            @else
                <p>У вас нет прав для добавления услуги.</p>
            @endcan

        </div>
    </div>
@endsection
