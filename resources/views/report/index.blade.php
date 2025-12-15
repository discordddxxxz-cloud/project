@props(['sort', 'status'])
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Список заявлений</h2>
    </x-slot>

    <div class="max-w-5xl mx-auto p-4 space-y-4">
        <div id="alert-10" class="flex items-center justify-between p-3 text-sm border rounded bg-blue-50" role="alert">
            <div>Это страница со списком заявлений!!!!!!</div>
            <button type="button" data-dismiss-target="#alert-10"
                class="px-2 py-1 border rounded hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-300">
                x 
            </button>
        </div>

<x-filter :sort="$sort" :status="$status" />

        <a class="inline-block px-3 py-2 bg-green-600 text-white rounded hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-300"
            href="{{ route('reports.create') }}">
            Создать заявление
        </a>

        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($reports as $report)
                <div class="border rounded p-3 bg-white flex flex-col gap-2">
                    <div class="text-sm">
                        <div><span class="font-semibold">Номер:</span> {{ $report->number }}</div>
                        <div><span class="font-semibold">Статус:</span> 
                        <x-status :type="$report->status->id">
                            {{ $report->status?->name }}
                        </x-status></div>
                        <div>
                            <span class="font-semibold">Дата:</span>
                            {{ \Carbon\Carbon::parse($report->created_at)->translatedFormat('j F Y h:i') }}
                        </div>
                    </div>

                    <div class="text-sm">
                        <span class="font-semibold">Описание:</span>
                        <div class="break-words">{{ $report->description }}</div>
                    </div>

                    <div class="mt-auto flex gap-2">
                        <a class="px-2 py-1 border rounded hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-300"
                        href="{{ route('reports.show', $report->id) }}">
                            Изменить
                        </a>

                        <form method="POST" action="{{ route('reports.destroy', $report->id) }}">
                            @method('delete')
                            @csrf
                            <button type="submit"
                                    class="px-2 py-1 border rounded hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-300">
                                Удалить
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        {{ $reports->links() }}
    </div>
</x-app-layout>