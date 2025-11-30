<x-app-layout>
    <x-slot name="header">
        <h2>Список заявлений</h2>
    </x-slot>

    <h1>Список заявлений</h1>

    <div>
        <span>Сортировка по дате создания: </span>
        <a href="{{ route('reports.index', ['sort' => 'desc', 'status' => $status]) }}">сначала новые</a>
        <a href="{{ route('reports.index', ['sort' => 'asc', 'status' => $status]) }}">сначала старые</a>
    </div>

    <div>
        <p>Фильтрация по статусу заявки</p>
        <ul>
            @foreach($statuses as $statusItem)
                <li>
                    <a href="{{ route('reports.index', ['sort' => $sort, 'status' => $statusItem->id]) }}">
                        {{ $statusItem->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <p>
        <a href="{{ route('reports.create') }}">Создать заявление</a>
    </p>

    <table border="1" cellspacing="0" cellpadding="4">
        <thead>
            <tr>
                <th>Номер авто</th>
                <th>Описание</th>
                <th>Дата создания</th>
                <th>Статус</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reports as $report)
                <tr>
                    <td>{{ $report->number }}</td>
                    <td>{{ $report->description }}</td>
                    <td>{{ $report->created_at }}</td>
                    <td>{{ $report->status?->name }}</td>
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

    {{ $reports->links() }}
</x-app-layout>
