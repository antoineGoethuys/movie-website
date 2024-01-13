<!-- Larger Screens Header -->
<div class="container-fluid d-none d-md-block" style="background-color: #2E4057; padding: 10px; color: #F6D8AE;">
    <div class="row align-items-center">
        <div class="col-md-2">
            <a href="/">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="max-width: 120px; max-height: 120px;"/>
            </a>
        </div>
        <div class="col-md-5">
            <ul class="list-inline">
                <li class="list-inline-item"><a href="/" style="color: #F6D8AE !important; text-decoration: none;">Home</a></li>
                <li class="list-inline-item"><a href="/movies" style="color: #F6D8AE !important; text-decoration: none;">Movies</a></li>
                <li class="list-inline-item"><a href="/news" style="color: #F6D8AE !important; text-decoration: none;">News</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <form class="input-group">
                <input type="text" class="form-control me-2" placeholder="Search" aria-label="Search"
                       aria-describedby="button-Search" disabled>
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2"
                        style="background-color: #91283B; border-color: #91283B; color: #F6D8AE" disabled>Search</button>
            </form>
        </div>
        <div class="col-md-2">
            <div class="container d-flex justify-content-center">
                <i class="fas fa-user-circle fa-2x" style="color: #F6D8AE;"></i>
            </div>
            <div class="d-flex justify-content-center align-items-center" style="color: #F6D8AE !important;">
                @auth
                    {{Auth::user()->name}}
                    <form class="nav-item" action="{{ route('auth.logout') }}" method="POST">
                        @method('delete')
                        @csrf
                        <input type="submit" value="Logout" class="btn btn-outline-secondarm-3" style="background-color: #91283B; border-color: #91283B; color: #F6D8AE" />
                    </form>
                @endauth
                @guest
                    <a href="/login" class="btn btn-outline-secondary m-3" style="background-color: #91283B; border-color: #91283B; color: #F6D8AE">Login</a>
                @endguest
            </div>
        </div>
    </div>
</div>

<!-- Smartphone Header -->
<div class="container-fluid d-md-none" style="background-color: #2E4057; padding: 10px; color: #F6D8AE;">
    <div class="row align-items-center">
        <div class="col-4 col-md-2">
            <button class="btn btn-outline-dark" type="button" data-bs-toggle="collapse" data-bs-target="#mobileNav" style="color: #F6D8AE;">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <div class="col-4 col-md-2 text-center">
            <a href="/" style="text-decoration: none;">
                <img src="{{ asset('images/logo.png') }}" alt="Logo"
                     class="img-fluid" style="max-width: 120px; max-height: 120px;"/>
            </a>
        </div>
        <div class="col-4 col-md-2">
            <div class="container d-flex justify-content-center align-items-center">
                <i class="fas fa-user-circle fa-2x" style="color: #F6D8AE;"></i>
            </div>
            <p style="color: #F6D8AE !important;">
                @auth
                {{Auth::user()->name}}
                <form class="nav-item" action="{{ route('auth.logout') }}" method="POST">
                    @method('delete')
                    @csrf
                    <input type="submit" value="Logout" class="btn btn-outline-secondary" style="background-color: #91283B; border-color: #91283B; color: #F6D8AE" />
                </form>
            @endauth
            @guest
                <div class="d-flex justify-content-center">
                    <a href="/login" class="btn btn-outline-secondary" style="background-color: #91283B; border-color: #91283B; color: #F6D8AE">Login</a>
                </div>
            @endguest
            </p>
        </div>
    </div>
    <div class="collapse" id="mobileNav">
        <ul class="list-group text-center" style="background-color: #2E4057;">
            <li class="list-group-item" style="background-color: #91283B;">
                <a href="/" style="display: block; color: #F6D8AE; text-decoration: none;">Home</a>
            </li>
            <li class="list-group-item" style="background-color: #91283B;">
                <a href="/movies" style="display: block; color: #F6D8AE; text-decoration: none;">Movies</a>
            </li>
            <li class="list-group-item" style="background-color: #91283B;">
                <a href="/show" style="display: block; color: #F6D8AE; text-decoration: none;">Showtimes</a>
            </li>
            <li class="list-group-item" style="background-color: #91283B;">
                <a href="/news" style="display: block; color: #F6D8AE; text-decoration: none;">News</a>
            </li>
        </ul>
        <form class="my-4" href="/">
            <div class="input-group">
                <input type="text" class="form-control me-2" placeholder="Search" aria-label="Search"
                       aria-describedby="button-Search"disabled>
                <button type="submit" class="btn btn-primary" style="background-color: #91283B; border-color: #91283B; color: #F6D8AE" disabled>Search</button>
            </div>
        </form>
    </div>
</div>
