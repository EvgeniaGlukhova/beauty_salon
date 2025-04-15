<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-21</title>
</head>
<body>
<h1>Список услуг</h1>

<ul>
    @foreach($services as $service)
        <li>
            {{ $service->name }} — {{ $service->price }} ₽
        </li>
    @endforeach
</ul>
</body>
</html>

