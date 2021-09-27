 <aside class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <img src="https://ptahbali.com/img/logo-white.png" class="img-fluid logo" alt=""> <span class="nav_logo-name">ADMIN DASHBOARD</span> </a>
                <div class="nav_list">
                    <a href="/admin" class="nav_link {{ Request::is('admin') ? 'active' : '' }}"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> <a href="/input" class="nav_link {{ Request::is('input') ? 'active' : '' }}"> <i class='bx bxs-pencil'></i><span class="nav_name">Input Data</span> </a>
                    <!-- <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span
                            class="nav_name">Stats</span> </a> -->
                </div>
            </div>
            <!-- <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a> -->
            <!-- Right Side Of Navbar -->

        </nav>
    </aside>