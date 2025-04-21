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
            <td>ID сеанса</td>
            <td>Косметолог</td>
            <td>Дата и время начала </td>
            <td>Дата и время конца</td>
        </tr>
        </thead>
        <tbody>
        @foreach ($client->appointments as $appointment)
            <tr>
                <td>{{ $appointment->id }}</td>
                <td>{{ $appointment->cosmetologist->name }}</td>
                <td>{{ $appointment->start_time }}</td>
                <td>{{ $appointment->end_time }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endif

</body>
</html>
