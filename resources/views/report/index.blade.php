<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Список заявлений</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<h1>Список заявлений</h1>

<p>
    <a href="{{ route('reports.create') }}">Создать заявление</a>
</p>

<table border="1" cellspacing="0" cellpadding="4">
    <thead>
    <tr>
        <th>Номер авто</th>
        <th>Описание</th>
        <th>Дата создания</th>
        <th>Действия</th>
    </tr>
    </thead>
    <tbody>
    @foreach($reports as $report)
        <tr>
            <td>{{ $report->number }}</td>
            <td>{{ $report->description }}</td>
            <td>{{ $report->created_at }}</td>
            <td>
                <a href="{{ route('reports.show', $report->id) }}">Изменить</a>

                <form method="POST" action="{{ route('reports.destroy', $report->id) }}" style="display:inline;">
                    @method('delete')
                    @csrf
                    <input type="submit" value="Удалить">
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
