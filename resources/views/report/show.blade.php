<x-app-layout>
    <x-slot name="header">
        <h2>Изменение заявления</h2>
    </x-slot>

    <h1>Изменить заявление</h1>

    <form method="POST" action="{{ route('reports.update', $report->id) }}">
        @csrf
        @method('put')

        <div>
            <label for="number">Номер авто</label><br>
            <input type="text" id="number" name="number" value="{{ old('number', $report->number) }}">
        </div>

        <div>
            <label for="description">Описание заявки</label><br>
            <textarea id="description" name="description" rows="5">{{ old('description', $report->description) }}</textarea>
        </div>

        <div>
            <button type="submit">Обновить</button>
        </div>
    </form>

    <p>
        <a href="{{ route('reports.index') }}">Вернуться к списку</a>
    </p>
</x-app-layout>
