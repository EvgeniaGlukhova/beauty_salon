<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-21</title>
</head>
<body>
<h2>Сеансы:</h2>
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
</body>
</html>
