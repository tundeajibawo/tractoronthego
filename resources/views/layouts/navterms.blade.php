<header id="header" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="{{url('/')}}"><img src="{{asset('assets/img/logo.png')}}" alt="" title=""/></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">


                   
                    <li><a href="terms">Terms & Conditions</a></li>

                    <li><a href="{{ route('login') }}"><span class="lnr lnr-enter"></span> Login</a></li>
                    <li><a href="{{ route('register') }}"><span class="lnr lnr-user"></span> Sign Up</a></li>

                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header>
