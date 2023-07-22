<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <title>My Site</title>

</head>
<body>
    <header>
    </header>
        <div id="app">
            <p>@{{message}}</p>
        </div>
    <footer>
    </footer>
    <script src="https://unpkg.com/vue@next"></script>
    <script src="{{ asset("js/main.js") }}"></script>
</body>
</html>
