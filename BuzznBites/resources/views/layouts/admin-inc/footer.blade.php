<footer class="footer py-4  ">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                    Copyright ©
                    <a href="{{ route('home') }}" class="font-weight-bold">BuzznBite's</a>
                    <script>
                        document.write(new Date().getFullYear())
                    </script>,
                    . All Right Reserved.
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link text-muted" target="_blank">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('about') }}" class="nav-link text-muted" target="_blank">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contact') }}" class="nav-link text-muted" target="_blank">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link pe-0 text-muted" target="_blank">License</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
