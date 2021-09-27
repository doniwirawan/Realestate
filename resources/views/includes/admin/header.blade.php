<header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->


            <div class="d-flex">
                {{-- <a class="nav-link me-5" href="#">

                    <i class="fa fa-user"></i>
                    Hello,
                    {{ Auth::user()->name }}
                </a> --}}

               

                <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Hello,
                    {{ Auth::user()->name }}
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                     </div>
                 </li>
            </div>


            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
    </header>