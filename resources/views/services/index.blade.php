<h2>Список услуг</h2>



{{-- Таблица ниже для редактирования и удаления --}}
<table border="1" cellpadding="5">
    <thead>
    <tr>
        <th>ID</th>
        <th>Наименование</th>
        <th>Цена</th>
        <th>Косметолог</th>
        <th>Действия</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($services as $service)
        <tr>
            <td>{{ $service->id }}</td>
            <td>{{ $service->name }}</td>
            <td>{{ $service->price }} ₽</td>
            <td>{{ $service->cosmetologist->name ?? '—' }}</td>
            <td>
            <td><a href="{{ url('service/destroy/'. $service->id)}} ">Удалить</a>
                <a href="{{ url('service/edit/' . $service->id) }}">Редактировать</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
