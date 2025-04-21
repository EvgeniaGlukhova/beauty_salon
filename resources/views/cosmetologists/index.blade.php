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
            <td><a href="/cosmetologists/{{ $cosmetologist->id }}">Подробнее</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
