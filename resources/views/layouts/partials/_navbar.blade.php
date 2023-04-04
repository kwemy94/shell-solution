<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
        </button>
        <form action="#" class="searchform order-lg-last">
        <div class="form-group d-flex">
        <input type="text" class="form-control pl-3" placeholder="Search">
        <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
        </div>
    </form>
        <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item "><a href="/services" class="nav-link">Nos Services</a></li>
            <li class="nav-item"><a href="/a-propos" class="nav-link">A Propos</a></li>
            <li class="nav-item"><a href="/team" class="nav-link">Team</a></li>
            <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>

            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
        </ul>
        </div>
    </div>
</nav>