<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <div class="col-12 d-flex justify-content-between">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav">
        <li class="nav-item">
            <form action="{{route('logout')}}" method="post">
                @csrf
                <input class="btn btn-outline-danger" type="submit" value="Выйти">
            </form>
        </li>
    </ul>
    </div>
</nav>
