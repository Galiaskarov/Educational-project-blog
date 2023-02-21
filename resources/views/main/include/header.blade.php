<header class="edica-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand  text-info" href="index.html">УЧЕБНЫЙ/\ПРОЕКТ</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('main.index')}}">Главная<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('main.news.index')}}">Новости<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Популярные<span class="sr-only">(current)</span></a>
                    </li>
                    @auth()
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('personal.main.index')}}">Личный кабинет<span class="sr-only">(current)</span></a>
                    </li>
                    @endauth
                    @guest()
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('home')}}">Войти<span class="sr-only">(current)</span></a>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </div>
</header>
