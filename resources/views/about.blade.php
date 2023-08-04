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
    <div class="header-logo">

    </div>
    <div class="header-menu">
        <div id="menu">
            <ul>
                <li><router-link to="/">Главная</router-link></li>
                <li><router-link to="/about">О нас</router-link></li>
            </ul>
            <router-view></router-view>
        </div>
    </div>
    <div class="header-login">

    </div>
</header>
<h1>О нас</h1>


<footer>
</footer>
<script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue@next"></script>
<script src="https://unpkg.com/vue-router@next"></script>
<script src="{{ asset("js/main.js") }}"></script>
</body>
</html>
