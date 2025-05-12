<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Beauty Salon</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Услуги</a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ url('/services') }}">Все услуги</a></li>
                            <li><a class="dropdown-item" href="{{ url('/services/create') }}">Добавить услугу</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/appointments') }}">Записи</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/cosmetologists') }}">Косметологи</a>
                    </li>

                </ul>
                @if(!Auth::user())
                    <form class="d-flex" method="post" action={{url('auth')}}>
                        @csrf
                        <input class="form-control me-2" type="text" placeholder="Логин" name="email" aria-label="Логин"
                               value="{{ old('email') }}"/>
                        <input class="form-control me-2" type="text" placeholder="Пароль" name="password" aria-label="Пароль"
                               value="{{ old('password') }}"/>
                        <button class="btn btn-outline-success" type="submit">Войти</button>
                    </form>
                @else
                    <ul class="navbar-nav">
                        <a class="nav-link active" href="#"><i class="fa fa-user" style="font-size:20px;color:white;"></i>
                        <span> </span>{{ Auth::user()->name }}</a>
                        <a class="btn btn-outline-success my-2 my-sm-0" href="{{url('logout')}}">Выйти</a>
                    </ul>
                @endif

            </div>
        </div>

    </nav>
</header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>















