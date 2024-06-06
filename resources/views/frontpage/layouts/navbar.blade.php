<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #28bac2">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/" style="color: white">
            <img src="/images/logo2.png" alt="" length="100" height="50" class="d-inline-block align-text">
            The Gentlemen's Cut</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a class="nav-link" aria-current="page"
                        href="/" style="color: white">Halaman Utama</a></li>
                <li class="nav-item {{ Request::is('product*') ? 'active' : '' }}"><a class="nav-link" href="/product"
                        style="color:white">Pilihan Paket</a></li>
                <li class="nav-item {{ Request::is('about*') ? 'active' : '' }}"><a class="nav-link" href="/about"
                        style="color: white">Tentang</a></li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
                            {{ auth()->user()->nama_admin }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/dashboard">Dashboard </a></li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <form class="d-flex">
                        <a href="/login" class="btn btn-outline-dark">
                            <i class="bi-people me-1"></i>
                            Login
                        </a>
                    </form>
                    {{-- <form class="d-flex">
                <button class="btn btn-outline-dark" type="submit">
                    <i class="bi-cart-fill me-1"></i>
                    Pesanan
                    <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                </button>
            </form> --}}
                @endauth
            </ul>
        </div>
    </div>
</nav>
