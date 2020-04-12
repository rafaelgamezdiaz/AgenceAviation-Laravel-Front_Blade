<nav class="navbar navbar-area navbar-expand-lg navbar-light ">
    <div class="container">
        <div class="collapse navbar-collapse" id="flybuzzNav">
            <!-- navbar collapse start -->
            <ul class="navbar-nav">
                <!-- navbar- nav -->
                <li class="nav-item">
                    <a class="logo-inverted nav-link pl-0" href="{{ route('home') }}">
                        <img class="logo-hidden " src="{{ asset('img/logo_invertido.png') }}" alt="logo">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-0" href="{{ route('home') }}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scrollto" href="#" data-id="about">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link scrollto" href="#" data-id="why-choose-us">Why Choose us?</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">Portfolio</a>
                    <div class="dropdown-menu">
                        @foreach($categories as $category)
                            <a href="{{ route('services', $category->id) }}" class="dropdown-item" >{{ $category->name }}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link scrollto"  href="#" data-id="services">Services</a>
                </li>
            </ul>
            <!-- /.navbar-nav -->
        </div>
        <div class="navbar-btn-wrapper">
            <!-- navbar btn wrapper -->
            <a href="{{ route('contact') }}" class="boxed-btn btn-rounded">Contact us</a>
        </div>
        <!-- /.navbar btn wrapper -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#flybuzzNav" aria-controls="flybuzzNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- navbar collapse end -->
    </div>
</nav>
