<x-app-layout>
    <h1>Административная панель</h1>

    <table>
        <thead>
        <tr>
            <th>ФИО</th>
            <th>Текст заявления</th>
            <th>Номер автомобиля</th>
            <th>Статус</th>
        </tr>
        </thead>

        <tbody>
        @foreach($reports as $report)
            <tr>
                <td>
                    {{ $report->user->lastname }}
                    {{ $report->user->name }}
                    {{ $report->user->middlename }}
                </td>

                <td>{{ $report->description }}</td>
                <td>{{ $report->number }}</td>

                <td>
                    {{-- форма изменения статуса, код будет доработан ниже --}}
                    <form class="status-form"
                          action="{{ route('reports.status.update', $report->id) }}"
                          method="POST">
                        @method('patch')
                        @csrf

                        <select name="status_id" id="status_id">
                            @foreach($statuses as $status)
                                <option value="{{ $status->id }}"
                                    {{ $status->id === $report->status_id ? 'selected' : '' }}>
                                    {{ $status->name }}
                                </option>
                            @endforeach
                        </select>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>
