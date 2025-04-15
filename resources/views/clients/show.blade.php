<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Информация о клиенте</title>
</head>
<body>
<h2>{{ $client ? "Сеансы клиента: " . $client->name : 'Неверный ID клиента' }}</h2>

@if($client)
    <table border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Дата сеанса</th>
            <th>Косметолог</th>
            <th>Дата создания</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($client->appointments as $appointment)
            <tr>
                <td>{{ $appointment->id }}</td>
                <td>{{ $appointment->date }}</td>
                <td>{{ $appointment->cosmetologist->name ?? 'Нет данных' }}</td>
                <td>{{ $appointment->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endif

</body>
</html>
