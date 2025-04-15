<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Клиент и услуги</title>
</head>
<body>

<h2>
    {!! $client ? "Список услуг клиента № " . $client->id : "Неверный ID клиента" !!}
</h2>

@if($client)
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Наименование</th>
            <th>Цена</th>
            <th>Количество</th>
        </tr>

        @foreach ($client->services as $service)
            <tr>
                <td>{{ $service->id }}</td>
                <td>{{ $service->name }}</td>
                <td>{{ $service->pivot->price }}</td>
                <td>{{ $service->pivot->quantity }}</td>
            </tr>
        @endforeach
    </table>

    <h2>{{ "Итого: " . $total->total }}</h2>
@endif

</body>
</html>

