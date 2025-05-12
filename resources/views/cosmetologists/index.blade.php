@extends('layout')

@section('content')

    <div class="container mt-5">
        <h2 class="mb-4">Список косметологов</h2>

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Имя косметолога</th>
                <th>Действие</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cosmetologists as $cosmetologist)
                <tr>
                    <td>{{ $cosmetologist->id }}</td>
                    <td>{{ $cosmetologist->name }}</td>
                    <td><a href="{{ url('/cosmetologists/' . $cosmetologist->id) }}" class="btn btn-sm btn-primary">Подробнее</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
