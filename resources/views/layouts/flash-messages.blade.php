@session('success')
    <div id="alert-1" class="flex items-center p-4 mb-4 text-green-800 border border-green-300 rounded-lg bg-green-50"
        role="alert">
        <div class="ms-3 text-sm font-medium">
            {{ $value }}
        </div>
        <button type="button"
            class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-100 inline-flex items-center justify-center h-8 w-8"
            data-dismiss-target="#alert-1" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 12 12M13 1 1 13" />
            </svg>
        </button>
    </div>
@endsession

@session('error')
    <div id="alert-2" class="flex items-center p-4 mb-4 text-red-800 border border-red-300 rounded-lg bg-red-50"
        role="alert">
        <div class="ms-3 text-sm font-medium">
            {{ $value }}
        </div>
        <button type="button"
            class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-100 inline-flex items-center justify-center h-8 w-8"
            data-dismiss-target="#alert-2" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 12 12M13 1 1 13" />
            </svg>
        </button>
    </div>
@endsession

@if ($errors->any())
    <div id="alert-5" class="flex items-center p-4 mb-4 text-gray-800 border border-gray-300 rounded-lg bg-gray-50"
        role="alert">
        <div class="ms-3 text-sm font-medium">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <button type="button"
            class="ms-auto -mx-1.5 -my-1.5 bg-gray-50 text-gray-500 rounded-lg focus:ring-2 focus:ring-gray-400 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8"
            data-dismiss-target="#alert-5" aria-label="Close">
            <span class="sr-only">Dismiss</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 12 12M13 1 1 13" />
            </svg>
        </button>
    </div>
@endif