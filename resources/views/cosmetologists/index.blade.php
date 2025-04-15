<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-21</title>
</head>
<body>
<h2>Список косметологов:</h2>
<table border="1">
    <thead>
    <tr>
        <td>ID</td>
        <td>Имя</td>
        <td>Записи</td>
    </tr>
    </thead>
    <tbody>
    @foreach ($cosmetologists as $cosmetologist)
        <tr>
            <td>{{ $cosmetologist->id }}</td>
            <td>{{ $cosmetologist->name }}</td>
            <td>
                @foreach ($cosmetologist->appointments as $appointment)
                    <p>{{ $appointment->id }} - {{ $appointment->created_at }}</p>
                @endforeach
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
