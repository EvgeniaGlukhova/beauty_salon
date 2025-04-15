<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-21</title>
</head>
<body>
<h2>Список записей:</h2>
<table border="1">
    <thead>
    <tr>
        <td>ID</td>
        <td>Наименование</td>
        <td>Дата</td>
    </tr>
    </thead>
    <tbody>
    @foreach ($appointments as $appointment)
        <tr>
            <td>{{ $appointment->id }}</td>
            <td>{{ $appointment->cosmetologist->name ?? 'Нет косметолога' }}</td>
            <td>{{ $appointment->created_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
