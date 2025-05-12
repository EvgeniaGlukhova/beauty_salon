@extends('layout')
@section('content')

<div class="container mt-5">
    <h2 class="mb-4">Список услуг</h2>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Наименование</th>
            <th>Цена</th>
            <th>Косметолог (ID)</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($services as $index => $service)
            <tr>
                <td>{{ $services->firstItem() + $index }}</td>
                <td>{{ $service->name }}</td>
                <td>{{ $service->price }} ₽</td>
                <td>{{ $service->cosmetologist_id }}</td>
                <td>
                    <a href="{{ url('/services/edit/' . $service->id) }}" class="btn btn-sm btn-primary">Редактировать</a>
                    <a href="{{ url('/services/destroy/' . $service->id) }}" class="btn btn-sm btn-danger"
                       onclick="return confirm('Вы уверены, что хотите удалить эту услугу?')">Удалить</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $services->links() }}
    </div>
</div>

@endsection
