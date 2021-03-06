<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">{{ config('app.name', 'Aplicativo') }}</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li{{ Route::currentRouteName() === 'home' ? ' class=active' : '' }}><a href="{{ route('home') }}">Início</a></li>
                <li{{ Route::currentRouteName() === 'clubs.index' ? ' class=active' : '' }}><a href="{{ route('clubs.index') }}">Clubes</a></li>
                <li{{ Route::currentRouteName() === 'partners.index' ? ' class=active' : '' }}><a href="{{ route('partners.index') }}">Sócios</a></li>
            </ul>
        </div>
    </div>
</nav>
