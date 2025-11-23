<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<header>
    <div>
        <a href="{{ url('/') }}">ЛОГОТИП САЙТА</a>
    </div>

    <nav>
        <ul>
            <li><a href="{{ url('/') }}">Главная</a></li>
            <li><a href="{{ url('/array') }}">Массивы</a></li>
        </ul>
    </nav>
</header>

<main>
    <h1>Главная страница</h1>

    <div>
        <img src="{{ Vite::asset('resources/images/images.jpg') }}" alt="Пример картинки">
    </div>

    <div>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non risus sit amet
            lectus varius fermentum. Sed at justo a ante interdum tincidunt. Integer eget gravida
            nisl. Donec non sem nec urna blandit bibendum. Praesent hendrerit, tellus at cursus
            gravida, velit sem convallis ipsum, at fermentum orci ipsum ut quam.
        </p>
        <p>
            Aliquam erat volutpat. Nunc aliquam, lacus et dapibus luctus, sapien dolor laoreet orci,
            sit amet pellentesque ex est eget lorem. Nulla facilisi. Mauris fringilla risus eu
            facilisis volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
            posuere cubilia curae.
        </p>
    </div>
</main>

<footer>
    <p>© 2025 Пономарев Глеб Сергеевич</p>
</footer>

</body>
</html>
