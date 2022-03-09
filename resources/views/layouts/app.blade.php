<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>MolenNews</title>
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid w-75">
            <a class="navbar-brand text-light w-25" href="/"><img class="w-75" src="{{asset('./img/Sans_titre-removebg-preview.png')}}"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light fs-3 active me-3" aria-current="page" href="/news">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light fs-3 me-3" href="/article">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light fs-3 me-3" href="/adminlil">Admin News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light fs-3 me-3" href="/adminog">Admin Articles</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('formulil')
    @yield('formulog')
    @yield('article_content')
    @yield('news_content')
    @yield('show_article_content')
    @yield('show_news_content')
    @yield('accueil_content')
    



    <footer class="bg-primary text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3 text-light">
            © 2022 MolenNews

        </div>
        <!-- Copyright -->
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
