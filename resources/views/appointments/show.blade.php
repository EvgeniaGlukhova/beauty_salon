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
        <th>
        <td>ID</td>
        <td>Дата записи</td>
        <td>Косметолог</td>
        <td>Клиент</td>
        <td>Дата создания</td>
        </th>
        </thead>
        <tr>
            <td>{{ $appointment->id }}</td>
            <td>{{ $appointment->appointment_date }}</td>
            <td>{{ $appointment->cosmetologist->name }}</td>
            <td>{{ $appointment->client->name }}</td>
            <td>{{ $appointment->created_at }}</td>
        </tr>
    </table>
@endif
</body>
</html>
