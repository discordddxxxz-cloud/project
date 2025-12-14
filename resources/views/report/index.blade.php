<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Список заявлений</h2>
    </x-slot>

    <div class="max-w-5xl mx-auto p-4 space-y-4">
        <div id="alert-1" class="flex items-center justify-between p-3 text-sm border rounded bg-blue-50" role="alert">
            <div>Это страница со списком заявлений.</div>
            <button type="button" data-dismiss-target="#alert-1"
                class="px-2 py-1 border rounded hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-300">
                X
            </button>
        </div>

        <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4">
            <div class="space-x-2">
                <span>Сортировка:</span>
                <a class="text-blue-600 hover:underline focus:outline-none focus:underline"
                    href="{{ route('reports.index', ['sort' => 'desc', 'status' => $status]) }}">сначала новые</a>
                <a class="text-blue-600 hover:underline focus:outline-none focus:underline"
                    href="{{ route('reports.index', ['sort' => 'asc', 'status' => $status]) }}">сначала старые</a>
            </div>

            <div>
                <p>Фильтрация по статусу</p>
                <ul class="flex flex-wrap gap-2 mt-2">
                    @foreach($statuses as $statusItem)
                        <li>
                            <a class="px-2 py-1 border rounded hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-300"
                                href="{{ route('reports.index', ['sort' => $sort, 'status' => $statusItem->id]) }}">
                                {{ $statusItem->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <a class="inline-block px-3 py-2 bg-green-600 text-white rounded hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-300"
            href="{{ route('reports.create') }}">
            Создать заявление
        </a>

        <div class="overflow-x-auto">
            <table border="1" cellspacing="0" cellpadding="4" class="w-full">
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
                            <td>{{\Carbon\Carbon::parse($report->created_at)->translatedFormat('j F Y h:i');}}</td>
                            <td>{{ $report->status?->name }}</td>
                            <td>
                                <a class="text-blue-600 hover:underline focus:outline-none focus:underline"
                                    href="{{ route('reports.show', $report->id) }}">Изменить</a>

                                <form method="POST" action="{{ route('reports.destroy', $report->id) }}"
                                    style="display:inline;">
                                    @method('delete')
                                    @csrf
                                    <input
                                        class="px-2 py-1 border rounded hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-300"
                                        type="submit" value="Удалить">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $reports->links() }}
    </div>
</x-app-layout>