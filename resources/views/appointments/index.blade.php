@extends('layout')

@section('content')

    <div class="container mt-5">
        <h2 class="mb-4">Список сеансов</h2>

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
            <tr>
                <th>ID сеанса</th>
                <th>Косметолог</th>
                <th>Клиент</th>
                <th>Дата и время начала</th>
                <th>Дата и время конца</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->id }}</td>
                    <td>{{ $appointment->cosmetologist->name }}</td>
                    <td>{{ $appointment->client->name }}</td>
                    <td>{{ $appointment->start_time }}</td>
                    <td>{{ $appointment->end_time }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>


    </div>

@endsection
