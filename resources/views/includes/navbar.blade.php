 <!--/ Nav Star /-->
 <a href="https://wa.me/6282146333864" target="_blank" rel="noopener noreferrer"
     class="whatsapp-button text-center d-flex align-items-center justify-content-center">
     <i class="fa fa-whatsapp fa-3x text-white"></i>
 </a>
 <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
     <div class="container">
         <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
             aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
             <span></span>
             <span></span>
             <span></span>
         </button>

        {{-- opsi 1 --}}
         {{-- <a class="navbar-brand text-brand" href="/">
            <img src="{{url('./frontend/img/favicon2.png')}}" alt="">
            Indonesia Property<span class="color-b"> Hub</span></a> --}}
        {{-- opsi 2 --}}
         <a class="navbar-brand text-brand" href="/">
            <img src="{{url('./frontend/img/favicon2.png')}}" alt="">
            </a>

         <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none"
             data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
             <span class="fa fa-search" aria-hidden="true"></span>
         </button>
         <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
             <ul class="navbar-nav">

                 {{-- <li class="nav-item">
                     <a class="nav-link  {{ request()->is('/') ? 'active' : '' }} " href="/">Home</a>
                 </li> --}}

                 {{-- <li class="nav-item ">
                     <a class="nav-link {{ request()->is('about') ? 'active' : '' }} " href="/about">About</a>
                 </li> --}}

                 {{-- <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="land" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Land
                     </a>
                     <div class="dropdown-menu" aria-labelledby="land">
                         <a class="dropdown-item" href="/category/land/freehold ">Freehold</a>
                         <a class="dropdown-item" href="/category/land/leasehold">Leasehold</a>
                     </div>
                 </li> --}}


                 {{-- <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="properties" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Properties
                     </a>
                     <div class="dropdown-menu" aria-labelledby="properties">
                         <a class="dropdown-item" href="/category/villa">Villas</a>
                         <a class="dropdown-item" href="/category/hotel">Hotels</a>
                         <a class="dropdown-item" href="/category/all">Shares Ownership</a>
                     </div>
                 </li> --}}
                 
{{-- 
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Real Estate
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="/category/all ">All Real Estate</a>
                         <a class="dropdown-item" href="/category/hotel">Hotel for Sale</a>
                         <a class="dropdown-item" href="/category/land">Land for Sale</a>
                         <a class="dropdown-item" href="/category/villa">Villa for Sale</a>
                         <a class="dropdown-item" href="/category/sharedownership">Shared ownership</a>
                     </div>
                 </li> --}}

                 <li class="nav-item  ">
                     <a class="nav-link  {{ request()->is('land') ? 'active' : '' }}" href="/land">Land</a>
                 </li>
                 <li class="nav-item  ">
                     <a class="nav-link  {{ request()->is('maps') ? 'active' : '' }}" href="/maps">Maps</a>
                 </li>
                 <li class="nav-item  ">
                     <a class="nav-link  {{ request()->is('investment-guide') ? 'active' : '' }}" href="/investment-guide">Investment Guide</a>
                 </li>

                 {{-- <li class="nav-item ">
                     <a class="nav-link  {{ request()->is('contact') ? 'active' : '' }} " href="/contact">Contact</a>
                 </li> --}}
{{-- 
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="/" id="uniq" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                         Unique Deals
                     </a>
                     <div class="dropdown-menu" aria-labelledby="uniq">
                         <a class="dropdown-item" href="/category/hotel">Hotels</a>
                         <a class="dropdown-item" href="/partnership">Shared partnership</a>
                     </div>
                 </li> --}}


                 {{-- <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="/" id="about" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                         About Us
                     </a>
                     <div class="dropdown-menu" aria-labelledby="about">
                         <a class="dropdown-item" href="/about">About Us</a>
                         <a class="dropdown-item" href="/team">The Team</a>
                         <a class="dropdown-item" href="/philosophy">Our Philosophy</a>
                         <a class="dropdown-item" href="/contact">Contact Us</a>
                     </div>
                 </li> --}}

                 <li class="nav-item ">
                     <a class="nav-link  {{ request()->is('about') ? 'active' : '' }} " href="/about">About Us</a>
                 </li>


             </ul>
         </div>
         <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
             data-target="#navbarTogglerDemo01" aria-expanded="false">
             <span class="fa fa-search" aria-hidden="true"></span>
         </button>
     </div>
 </nav>
 <!--/ Nav End /-->
