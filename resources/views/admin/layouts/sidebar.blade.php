<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('') }}assets/images/logo-sm.png" alt="" height="22" />
            </span>
            <span class="logo-lg">
                <img src="{{ asset('') }}assets/images/logo-dark.png" alt="" height="17" />
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('') }}assets/images/logo-sm.png" alt="" height="22" />
            </span>
            <span class="logo-lg">
                <img src="{{ asset('') }}assets/images/logo-light.png" alt="" height="17" />
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
                @if (auth()->user()->role == 'admin')
                    <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="/dashboard">
                            <i class="ri-home-4-line"></i> <!-- Ikon baru untuk Dashboard -->
                            <span data-key="t-widgets">Dashboard</span>
                        </a>
                    </li>
                @endif

                <li class="menu-title">
                    <i class="ri-folder-3-line"></i> <!-- Ikon baru untuk judul Pages -->
                    <span data-key="t-pages">Pages</span>
                </li>

                @if (auth()->user()->role == 'admin')
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="/kasir">
                            <i class="ri-shopping-cart-line"></i> <!-- Ikon baru untuk Kasir -->
                            <span data-key="t-advance-ui">Kasir</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="/rekapitulasi">
                            <i class="ri-file-list-3-line"></i> <!-- Ikon baru untuk Rekapitulasi -->
                            <span data-key="t-advance-ui">Rekapitulasi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="/produk">
                            <i class="ri-price-tag-3-line"></i> <!-- Ikon baru untuk Produk Saya -->
                            <span data-key="t-advance-ui">Produk Saya</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="/notifikasi">
                            <i class="ri-notification-3-line"></i> <!-- Ikon baru untuk Notifikasi -->
                            <span data-key="t-advance-ui">Notifikasi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="/logout">
                            <i class="ri-logout-circle-line"></i> <!-- Ikon baru untuk Logout -->
                            <span data-key="t-advance-ui">Logout</span>
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="/karyawan/kasir">
                            <i class="ri-shopping-cart-line"></i> <!-- Ikon baru untuk Kasir -->
                            <span data-key="t-advance-ui">Kasir</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="/logout">
                            <i class="ri-logout-circle-line"></i> <!-- Ikon baru untuk Logout -->
                            <span data-key="t-advance-ui">Logout</span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
        <!-- Sidebar -->
    </div>


    <div class="sidebar-background"></div>
</div>
