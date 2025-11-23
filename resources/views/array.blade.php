<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Товары</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <h1>Каталог товаров</h1>

    <div>
        @foreach($array as $item)
            <div>
                <img src="{{ Vite::asset('resources/images/' . $item['path']) }}" alt="">
                <h3>{{ $item['title'] }}</h3>
                <p>Цена: {{ $item['price'] }}</p>
            </div>
        @endforeach
    </div>

</body>

</html>