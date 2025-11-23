<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Создание заявления</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<h1>Создать заявление</h1>

<form method="POST" action="{{ route('reports.store') }}">
    @csrf

    <div>
        <label for="number">Номер авто</label><br>
        <input type="text" id="number" name="number" value="{{ old('number') }}">
    </div>

    <div>
        <label for="description">Описание заявки</label><br>
        <textarea id="description" name="description" rows="5">{{ old('description') }}</textarea>
    </div>

    <div>
        <button type="submit">Создать</button>
    </div>
</form>

<p>
    <a href="{{ route('reports.index') }}">Вернуться к списку</a>
</p>

</body>
</html>
