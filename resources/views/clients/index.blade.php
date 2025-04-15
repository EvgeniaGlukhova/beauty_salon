<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Список клиентов</title>
</head>
<body>
<h2>Список клиентов</h2>

<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Имя клиента</th>
        <th>Действие</th>
    </tr>
    </thead>
    <tbody>
    @foreach($clients as $client)
        <tr>
            <td>{{ $client->id }}</td>
            <td>{{ $client->name }}</td>
            <td><a href="/clients/{{ $client->id }}">Подробнее</a></td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
