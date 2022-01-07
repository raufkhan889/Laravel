<header>
    <div class="header-bottom wrapper-padding-2 bg-img res-header-sm food-header "
        style="background-image: url(frontend/assets/img/bg/11.jpg); ">
        <div class="container">
            <div class="header-bottom-wrapper">
                <div class="logo-2 ptb-30">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('frontend/assets/img/logo/bites-logo.png') }}" width="150" alt="Logo">
                    </a>
                </div>
                <div class="menu-style-2 handicraft-menu menu-hover">
                    <nav>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">home</a>
                            </li>
                            <li><a href="{{ route('category') }}">Categories</a>
                            </li>
                            <li><a href="{{ route('products') }}">Products</a>

                            </li>
                            <li><a href="{{ route('about') }}">About</a>

                            </li>
                            <li><a href="{{ route('contact') }}">contact</a></li>
                        </ul>
                    </nav>
                </div>
                @guest
                    <div class="menu-style-2 handicraft-menu menu-hover">
                        <nav>
                            <ul>
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                @else
                    <div class="header-cart">
                        <a class="icon-cart-furniture food-cart" href="{{ route('cart') }}">
                            <i class="ti-shopping-cart"></i>
                            <span class=" green cart-count">0</span>
                        </a>
                    </div>
                    <div class="ptb-30 navbar-nav py-5 mt-2 header-profile">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDarkDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                @if (Auth::user()->role_as == '1')
                                    <li><a class="dropdown-item" target="_blank"
                                            href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                @endif
                                <li><a class="dropdown-item" href="{{ route('orders') }}">My Orders</a></li>
                                <li><a class="dropdown-item" href="{{ route('wishlist') }}">
                                        Wishlist &nbsp; <span class="bg-white text-dark rounded-pill px-1 wishlist-count">
                                            0</span>
                                    </a></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                           document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </div>
                @endguest

            </div>
            <div class="row">
                <div class="mobile-menu-area d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li><a href="#">HOME</a>

                                </li>
                                <li><a href="#">pages</a>

                                </li>
                                <li><a href="#">shop</a>

                                </li>
                                <li><a href="#">BLOG</a>

                                </li>
                                <li><a href="contact.html"> Contact </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
