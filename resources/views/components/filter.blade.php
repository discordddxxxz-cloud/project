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
                            <a class="px-2 py-1 border rounded hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-300 hover:bg-violet-600 focus:outline-2 focus:outline-offset-2 focus:outline-violet-500 active:bg-violet-700"
                                href="{{ route('reports.index', ['sort' => $sort, 'status' => $statusItem->id]) }}">
                                {{ $statusItem->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>