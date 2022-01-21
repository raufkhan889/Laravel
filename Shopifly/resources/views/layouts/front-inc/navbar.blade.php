<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('assets/images/fav-logo.png') }}" width="35px" alt="">&nbsp;
            Shppifly
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                @auth
                    @if (Auth::user()->role_as == '1')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard') }}"
                                target="_blank">{{ __('Dashboard') }}
                            </a>
                        </li>
                    @endif
                @endauth
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('home') ? 'active' : '' }}"
                        href="{{ route('home') }}">{{ __('Home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('category') ? 'active' : '' }}"
                        href="{{ route('category') }}">{{ __('Category') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link cart-count-wrapper {{ Request::is('cart') ? 'active' : '' }}"
                        href="{{ route('cart') }}">
                        <i class="material-icons opacity-10 text-warning">shopping_cart</i>
                        <span class="bg-danger rounded px-1 cart-count-icon cart-count">
                            0
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link cart-count-wrapper {{ Request::is('wishlist') ? 'active' : '' }}"
                        href="{{ route('wishlist') }}">
                        <i class="material-icons opacity-10 text-success">volunteer_activism</i>
                        <span class="bg-danger rounded px-1 cart-count-icon wishlist-count">
                            0
                        </span>
                    </a>
                </li>
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('orders') }}">My Orders</a></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
