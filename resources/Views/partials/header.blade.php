<!-- Larger Screens Header -->
<div class="container-fluid d-none d-md-block" style="background-color: #2E4057; padding: 10px; color: #F6D8AE;">
    <div class="row align-items-center">
        <div class="col-md-2">
            <a href="/">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="max-width: 120px; max-height: 120px;"/>
            </a>
        </div>
        <div class="col-md-8">
            <ul class="list-inline">
                <li class="list-inline-item"><a href="/" style="color: #F6D8AE !important; text-decoration: none;">Home</a></li>
                <li class="list-inline-item"><a href="/movies" style="color: #F6D8AE !important; text-decoration: none;">Movies</a></li>
                <li class="list-inline-item"><a href="/profile" style="color: #F6D8AE !important; text-decoration: none;">Profile</a></li>
                @auth
                    @if(Auth::user()->isAdmin())
                        <li class="list-inline-item">
                            <a href="/admin/users" style="color: #F6D8AE !important; text-decoration: none;">Users</a>
                        </li>
                    @endif
                @endauth
            </ul>
        </div>
        <div class="col-md-2 ml-auto">
            <div class="container">
                <div class="row text-center">
                    <i class="fas fa-user-circle fa-2x" style="color: #F6D8AE;"></i>
                </div>
                <div class="row" style="color: #F6D8AE !important;">
                    @auth
                        <div class="col text-center">{{Auth::user()->username}}</div>
                    @endauth
                </div>
                <div class="row text-center">
                    @auth
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
                <a href="/profile" style="display: block; color: #F6D8AE; text-decoration: none;">Profile</a>
            </li>
            @auth
                @if(Auth::user()->isAdmin())
                    <li class="list-group-item" style="background-color: #91283B;">
                        <a href="/admin/users" style="display: block; color: #F6D8AE; text-decoration: none;">Users</a>
                    </li>
                @endif
            @endauth
        </ul>
        <div class="my-4">
            <div class="container text-center">
                @auth
                    <img src="{{Auth::user()->profile->avatar}}" alt="">
                @endauth
                @guest
                    <i class="fas fa-user-circle fa-2x" style="color: #F6D8AE;"></i>
                @endguest
            </div>
            <p style="color: #F6D8AE !important;" class="text-center">
                @auth
                    {{Auth::user()->username}}
                    <form class="nav-item text-center" action="{{ route('auth.logout') }}" method="POST">
                        @method('delete')
                        @csrf
                        <input type="submit" value="Logout" class="btn btn-outline-secondary" style="background-color: #91283B; border-color: #91283B; color: #F6D8AE" />
                    </form>
                @endauth
            </p>
        </div>
    </div>
</div>
