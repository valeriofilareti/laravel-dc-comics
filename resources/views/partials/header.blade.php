<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">

                    <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
                    <a class="nav-link {{Route::currentRouteName() === 'comics.index' ? 'active' : ''}}" href="{{route('comics.index')}}">Prodotti</a>
                    <a class="nav-link {{Route::currentRouteName() === 'comics.create' ? 'active' : ''}}" href="{{route('comics.create')}}">Crea</a>
                    <a class="nav-link disabled">Disabled</a>
                </div>
            </div>
        </div>
    </nav>
    <h1>{{Route::currentRouteName()}}</h1>
</header>
