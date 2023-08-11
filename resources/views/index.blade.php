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
                    <li><router-link to="/contact">Наши контакты</router-link></li>
                    <li><router-link to="/about">О нас</router-link></li>
                </ul>
                <router-view></router-view>
            </div>
        </div>
        <div class="header-login">

        </div>
    </header>
    <div class="main">
        <div class="main-sidebar">
            <div id="category">
                <div class="main-content-sidebar" v-for="category in categories">
                    <h3 >@{{ category.name }}</h3>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div id="app">
                <div class="main-content-posts" v-for="post in posts">
                    <h3 >@{{ post.name }}</h3>
                    <p >@{{ post.content }}</p>
                </div>
            </div>
            <div id="counter">
                Счётчик: @{{ counter }}
            </div>


        </div>

    </div>


    <footer>
    </footer>
    <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@next"></script>
    <script src="https://unpkg.com/vue-router@next"></script>
    <script src="{{ asset("js/main.js") }}"></script>
</body>
</html>
