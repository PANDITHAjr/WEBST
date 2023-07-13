<nav class="navbar nav-extended no-padding teal darken-4">
    <div class="nav-wrapper">
        @auth
        <a href="{{ route('home') }}" class="brand-logo center hide-on-small-only">SINDICATO DE TRANSPORTE 27 DE DICIEMBRE</a>
        <ul id="nav-mobile" class="right">
            <li><a href="{{ route('home2') }}" class="waves-effect dark-primary-color-text" type="submit"><i class="material-icons">home</i></a></li>
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons left">exit_to_app</i>Salir</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                    @csrf
                </form>
            </li>
            <li>
                <a href="#" role="button">
                    {{ Auth::user()->name }}
                </a>
            </li>
        </ul>

        <a href="home2" data-target="sidenav-left" class="sidenav-trigger left show-on-medium-and-up"><i class="material-icons dark-primary-color-icon">chevron_left</i></a>

        @endauth

        @yield('breadcrumb')
    </div>
</nav>