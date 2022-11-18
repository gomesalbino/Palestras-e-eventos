<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Roboto" rel="stylesheet">

    <! ---Bootstrap -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/estilizacao.css') }}">

        <!-- Javascripts -->
        <script src="{{ asset('js/script.js') }}"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="{{ asset('img/Albino Gomes.jpg') }}" alt="Imagem de palestra" />
                </a>
                <ul class="navbar-nav">

                    <li class="navbar-item">
                        <a href="/" class="nav-link">Eventos</a>
                    </li>
                    <li class="navbar-item">
                        <a href="{{ route('events.create') }}" class="nav-link">Criar eventos</a>
                    </li>
                    @auth
                    <li class="navbar-item">
                        <a href="{{ route('dashboard') }}" class="nav-link">Meus eventos</a>
                    </li>
                     <li class="navbar-item">
                     <form action="{{ route('logout') }}" method="POST">
                     @csrf
                        <a href="{{ route('logout') }}" class="nav-link" 
                        onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
                    </form>
                    </li>   
                    @endauth
                   @guest
                    <li class="navbar-item">
                        <a href="{{ route('login') }}" class="nav-link">Entrar</a>
                    </li>
                    <li class="navbar-item">
                        <a href="{{ route('register')}}" class="nav-link">Cadastrar</a>
                    </li>
                   @endguest
                </ul>
            </div>
        </nav>
    </header>

    <main class="container-fluid">
        <div class="row">
            @if (session('msg'))
                <p class="msg">{{ session('msg') }}</p>
            @endif
            @yield('content')
        </div>
    </main>

    <footer>
        <p>AG Eventes &copy; 2022 </p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
