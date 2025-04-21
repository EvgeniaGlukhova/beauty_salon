<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Сеансы Косметолога</title>
</head>
<body>
<h2>{{ $cosmetologist ? "Сеансы Косметолога: " . $cosmetologist->name : 'Неверный ID косметолога' }}</h2>

@if($cosmetologist)
    <table border="1">
        <thead>
        <tr>
            <td>ID сеанса</td>
            <td>Клиент</td>
            <td>Дата и время начала </td>
            <td>Дата и время конца</td>
        </tr>
        </thead>
        <tbody>
        @foreach ($cosmetologist->appointments as $appointment)
            <tr>
                <td>{{ $appointment->id }}</td>
                <td>{{ $appointment->client->name }}</td>
                <td>{{ $appointment->start_time }}</td>
                <td>{{ $appointment->end_time }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endif
</body>
</html>

