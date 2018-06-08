 <header class="header">
        <div class="header__content row">

            <div class="header__logo">
                <a class="logo" href="/">
                    <img src="images/academia2.png" alt="Homepage">
                </a>
            </div> <!-- end header__logo -->

            <ul class="header__social">
                <li>
                    <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
            </ul>
            @if (Auth::check())
                &nbsp
                    &nbsp&nbsp
                    &nbsp&nbsp
            <span style="position: absolute;top: 0px;right: 0px" class="search-submit"> Estas logueado como: {{ Auth::user()->name }} </span>
            @endif
            <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

            <nav class="header__nav-wrap">

                <h2 class="header__nav-heading h6">Site Navigation</h2>

                <ul class="header__nav">
                    <a href="/" title="">Home</a>
                    &nbsp
                    &nbsp
                    <a href="/posts">Post</a></li>
                    &nbsp
                    &nbsp
              @if (!Auth::check())
                    <a href="{{ route('login') }}">Logueate</a></li>
                    &nbsp
                    &nbsp

                @else (Auth::user()->role_id == "1" || Auth::user()->role_id == "2") 

                <a href="/admin" class="text-uppercase">Administración</a>
                    &nbsp
                    &nbsp
            @endif
            <a href="/about" >About</a></li>
                    &nbsp
                    &nbsp

            @if (Auth::check())
            <form action="{{ route('logout') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div>
                                        <button>
                                            Cerrar Sesión
                                        </button>
                                    </div>
            </form>
            @endif
                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

            </nav> <!-- end header__nav-wrap -->

        </div> <!-- header-content -->
 </header> <!-- header -->