<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Информация о Косметологе</title>
</head>
<body>
<h2>{{ $cosmetologist ? "Косметолог: " . $cosmetologist->name : 'Неверный ID косметолога' }}</h2>

@if($cosmetologist)
    <table border="1">
        <thead>
        <th>
        <td>ID</td>
        <td>Имя</td>
        <td>Дата создания</td>
        </th>
        </thead>
        <tr>
            <td>{{ $cosmetologist->id }}</td>
            <td>{{ $cosmetologist->name }}</td>
            <td>{{ $cosmetologist->created_at }}</td>
        </tr>
    </table>
@endif
</body>
</html>

