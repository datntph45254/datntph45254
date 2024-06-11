<header class="navigation">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand order-1" href="{{ url('/') }}">
                <img class="img-fluid" width="100px" src="{{ asset('assets/img/logo.png') }}" alt="Logo"
                    onerror="this.onerror=null; this.src='{{ asset('assets/img/logo.png') }}';">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('') }}" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Home </i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            About <i class="ti-angle-down ml-1"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('about-me') }}">About Me</a>
                            <a class="dropdown-item" href="{{ url('about-us') }}">About Us</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Product </i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('shop') }}">Shop</a>
                    </li>
                    <!-- search_product.php -->
                    <li>
                     
                    </li>
                </ul>
            </div>
            <div class="order-2 order-lg-3 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <nav>
                            @if (isset($_SESSION['user']))
                                @if ($_SESSION['user']['type'] == 'admin')
                                    <a class="btn btn-primary" href="{{ url('admin') }}">Admin</a>
                                @endif
                                <a class="btn btn-primary" href="{{ url('logout') }}">Logout</a>
                            @else
                                <a class="btn btn-primary" href="{{ url('login') }}">Login</a>
                            @endif
                        </nav>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
