<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Косметолог и услуги</title>
</head>
<body>

<h2>
    {!! $cosmetologist ? "Список услуг косметолога № " . $cosmetologist->id : "Неверный ID косметолога" !!}
</h2>

@if($cosmetologist)
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Наименование</th>
            <th>Цена</th>
            <th>Длительность (мин)</th>
        </tr>

        @foreach ($cosmetologist->services as $service)
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

