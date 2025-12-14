<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Создать заявление</h2>
    </x-slot>

    <div class="max-w-xl mx-auto p-4 space-y-4">
        <form method="POST" action="{{ route('reports.store') }}" class="space-y-3">
            @csrf

            <div>
                <label for="number">Номер авто</label><br>
                <input class="w-full border rounded px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-300"
                    type="text" id="number" name="number" value="{{ old('number') }}">
            </div>

            <div>
                <label for="description">Описание заявки</label><br>
                <textarea class="w-full border rounded px-2 py-1 focus:outline-none focus:ring-2 focus:ring-blue-300"
                    id="description" name="description" rows="5">{{ old('description') }}</textarea>
            </div>

            <button
                class="px-3 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-300"
                type="submit">
                Создать
            </button>
        </form>

        <a class="text-blue-600 hover:underline focus:outline-none focus:underline" href="{{ route('reports.index') }}">
            Вернуться к списку
        </a>
    </div>
</x-app-layout>