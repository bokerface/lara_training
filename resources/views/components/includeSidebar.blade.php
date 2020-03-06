<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href={{ url('/') }}>
            <img src="images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li id="dashboard">
                    <a href={{ url('/') }}>
                        <i class="fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>
                </li>
                <li id="chart">
                    <a href={{ url('/chart') }}>
                        <i class="fas fa-chart-bar"></i>
                        Charts
                    </a>
                </li>
                <li id="table">
                    <a href={{ url('/table') }}>
                        <i class="fas fa-table"></i>Tables</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
