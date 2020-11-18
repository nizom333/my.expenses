<nav class="navbar fixed-top navbar-expand-lg main-navbar app-nav">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="assets/images/logo.png" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar top-bar"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#steps">Этапы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#features">Возможности</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#screenshots">Скриншоты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimonials">Отзывы</a>
                </li>
            </ul>
            <div class="nav-btn">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}" class="default-btn bg-main">Личный кабинет</a>
                    @else
                        <a href="{{ route('login') }}" class="default-btn bg-main">Вход</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="default-btn bg-main">Регистрация</a>
                        @endif
                    @endif
                @endif
            </div>
        </div>
    </div>
</nav>
