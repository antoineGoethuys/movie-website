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
                <li class="list-inline-item"><a href="/show" style="color: #F6D8AE !important; text-decoration: none;">Showtimes</a></li>
                <li class="list-inline-item"><a href="/news" style="color: #F6D8AE !important; text-decoration: none;">News</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <form class="input-group">
                <input type="text" class="form-control me-2" placeholder="Search" aria-label="Search"
                       aria-describedby="button-Search">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2"
                        style="background-color: #91283B; border-color: #91283B; color: #F6D8AE">Search</button>
            </form>
        </div>
        <div class="col-md-2">
            <a href="/account" class="d-flex flex-column justify-content-center align-items-center m-4" style="text-decoration: none;">
                <img class="fas fa-user-circle fa-2x me-2" style="color: #F6D8AE;" alt="logo account">
                <p style="color: #F6D8AE !important;">My Account</p>
            </a>
        </div>
    </div>
</div>

<!-- Smartphone Header -->
<div class="container-fluid d-md-none" style="background-color: #2E4057; padding: 10px; color: #F6D8AE;">
    <div class="row align-items-center">
        <div class="col-4">
            <button class="btn btn-outline-dark" type="button" data-bs-toggle="collapse" data-bs-target="#mobileNav" style="color: #F6D8AE;">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <div class="col-4 text-center">
            <a href="/" style="text-decoration: none;">
                <img src="{{ asset('images/logo.png') }}" alt="Logo"
                     class="img-fluid" style="max-width: 120px; max-height: 120px;"/>
            </a>
        </div>
        <div class="col-4">
            <a href="/account" class="d-flex flex-column justify-content-center align-items-center m-4" style="text-decoration: none;">
                <i class="fas fa-user-circle fa-2x" style="color: #F6D8AE;"></i>
                <p style="color: #F6D8AE !important;">My Account</p>
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
                <a href="/show" style="display: block; color: #F6D8AE; text-decoration: none;">Showtimes</a>
            </li>
            <li class="list-group-item" style="background-color: #91283B;">
                <a href="/news" style="display: block; color: #F6D8AE; text-decoration: none;">News</a>
            </li>
        </ul>
        <form class="my-4" href="/">
            <div class="input-group">
                <input type="text" class="form-control me-2" placeholder="Search" aria-label="Search"
                       aria-describedby="button-Search">
                <button type="submit" class="btn btn-primary" style="background-color: #91283B; border-color: #91283B; color: #F6D8AE">Search</button>
            </div>
        </form>
    </div>
</div>
