<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Информация о Записи</title>
</head>
<body>
<h2>{{ $appointment ? "Запись на приём с Косметологом: " . $appointment->cosmetologist->name : 'Неверный ID записи' }}</h2>

@if($appointment)
    <table border="1">
        <thead>
        <tr>
        <td>ID сеанса</td>
        <td>Косметолог</td>
        <td>Клиент</td>
        <td>Дата и время начала </td>
        <td>Дата и время конца</td>
        </tr>
        </thead>
        <tr>
            <td>{{ $appointment->id }}</td>
            <td>{{ $appointment->cosmetologist->name }}</td>
            <td>{{ $appointment->client->name }}</td>
            <td>{{ $appointment->start_time }}</td>
            <td>{{ $appointment->end_time }}</td>
        </tr>
    </table>
@endif
</body>
</html>
