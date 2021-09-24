 <!--/ Nav Star /-->
 <a href="https://wa.me/6282146333864" target="_blank" rel="noopener noreferrer"
     class="whatsapp-button btn-success text-center d-flex align-items-center justify-content-center">
     <i class="fa fa-whatsapp fa-3x"></i>
 </a>

 <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
     <div class="container">
         <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
             aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
             <span></span>
             <span></span>
             <span></span>
         </button>
         <a class="navbar-brand text-brand" href="/">Soli <span class="color-b">Real Estate</span></a>
         <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none"
             data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
             <span class="fa fa-search" aria-hidden="true"></span>
         </button>
         <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
             <ul class="navbar-nav">
                 <li class="nav-item">
                     <a class="nav-link  {{ request()->is('/') ? 'active' : '' }} " href="/">Home</a>
                 </li>
                 <li class="nav-item ">
                     <a class="nav-link {{ request()->is('about') ? 'active' : '' }} " href="/about">About</a>
                 </li>
                 {{-- <li class="nav-item  ">
                     <a class="nav-link  {{ request()->is('realestate/*') || request()->is('realestate') || request()->is('search/*')  ? 'active' : '' }}"
                         href="/realestate">Real Estate</a>
                 </li> --}}
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Real Estate
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="/category/all">All Real Estate</a>
                         <a class="dropdown-item" href="/category/hotel">Hotel for Sale</a>
                         <a class="dropdown-item" href="/category/land">Land for Sale</a>
                         <a class="dropdown-item" href="/category/villa">Villa for Sale</a>
                     </div>
                 </li>

                 <li class="nav-item  ">
                     <a class="nav-link  {{ request()->is('maps') ? 'active' : '' }}" href="/maps">Maps</a>
                 </li>
                 <li class="nav-item ">
                     <a class="nav-link  {{ request()->is('contact') ? 'active' : '' }} " href="/contact">Contact</a>
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
