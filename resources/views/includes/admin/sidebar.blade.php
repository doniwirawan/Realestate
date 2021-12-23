 <aside class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <img src="https://ptahbali.com/img/logo-white.png" class="img-fluid logo" alt=""> <span class="nav_logo-name">ADMIN DASHBOARD</span> </a>
                <div class="nav_list">
                    <a href="/admin" class="nav_link {{ Request::is('admin') ? 'active' : '' }}"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> 
                    
                    <a href="/emailing-list" class="nav_link {{ Request::is('emailing-list') ? 'active' : '' }}"> <i class='bx bxs-envelope'></i><span class="nav_name">Email List</span> </a>

                    <a href="/contact-form-data" class="nav_link {{ Request::is('contact-form-data') ? 'active' : '' }}"> <i class='bx bxs-contact'></i><span class="nav_name">Contact Form</span> </a>


                    <a href="/input" class="nav_link {{ Request::is('input') ? 'active' : '' }}"> <i class='bx bxs-pencil'></i><span class="nav_name">Input Data</span> </a>
                </div>
            </div>
        </nav>
</aside>