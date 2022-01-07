<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('home') }}" target="_blank">
            <img src="{{ asset('admin/assets/img/bites-logo.png') }}" class="navbar-brand-img h-100" alt="logo">
            <span class="ms-1 font-weight-bold text-white">BuzznBite's</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('admin/dashboard') ? 'active bg-gradient-primary' : '' }}"
                    href="{{ route('admin.dashboard') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white 
                {{ Request::is('admin/category') ? 'active bg-gradient-primary' : '' }} 
                {{ Request::is('admin/category/create') ? 'active bg-gradient-primary' : '' }} "
                    href="{{ route('admin.category') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">category</i>
                    </div>
                    <span class="nav-link-text ms-1">Categories</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white 
                {{ Request::is('admin/product') ? 'active bg-gradient-primary' : '' }} 
                {{ Request::is('admin/product/create') ? 'active bg-gradient-primary' : '' }} 
                "
                    href="{{ route('admin.product') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">shopping_bag</i>
                    </div>
                    <span class="nav-link-text ms-1">Products</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white 
                {{ Request::is('admin/orders') ? 'active bg-gradient-primary' : '' }}
                {{ Request::is('admin/orders/history') ? 'active bg-gradient-primary' : '' }} 
                "
                    href="{{ route('admin.orders') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">sell</i>
                    </div>
                    <span class="nav-link-text ms-1">Orders</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white 
                {{ Request::is('admin/users') ? 'active bg-gradient-primary' : '' }} 
                {{-- Request::is('admin/product/create')?'activebg-gradient-primary':'' --}} 
                "
                    href="{{ route('admin.users') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white 
                {{-- {{ Request::is('admin/product') ? 'active bg-gradient-primary' : '' }} 
                {{ Request::is('admin/product/create') ? 'active bg-gradient-primary' : '' }} --}}
                " href="#">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">settings</i>
                    </div>
                    <span class="nav-link-text ms-1">Settings</span>
                </a>
            </li>
        </ul>
    </div>

</aside>
