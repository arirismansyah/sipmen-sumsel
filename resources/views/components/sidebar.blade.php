<!--APP-SIDEBAR-->
<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="index.html">
                <img src="/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                <img src="/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
                <img src="/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
                <img src="/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                    fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">
                <li class="sub-category">
                    <h3>Home</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{url('home')}}"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                </li>
                <li class="sub-category">
                    <h3>Admin</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{url('users')}}"><i class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Users</span></a>
                </li>
                <li class="sub-category">
                    <h3>Pengiriman Dokumen PAPI</h3>
                </li>
                <li>
                    <a class="side-menu__item" href="{{url('input')}}"><i class="side-menu__icon fe fe-edit"></i><span class="side-menu__label">Input Pengiriman</span></a>
                </li>
                <li class="sub-category">
                    <h3>Settings</h3>
                </li>
                <li>
                    <a class="side-menu__item" href="{{url('setting')}}"><i class="side-menu__icon fe fe-settings"></i><span class="side-menu__label">Setting Akun</span></a>
                </li>
                
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg></div>
        </div>
    </aside>
</div>
<!--/APP-SIDEBAR-->

<!-- SIDE-MENU JS -->
<script src="/plugins/sidemenu/sidemenu.js"></script>

<!-- Sticky js -->
<script src="/js/sticky.js"></script>

<!-- SIDEBAR JS -->
<script src="/plugins/sidebar/sidebar.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="/plugins/p-scroll/perfect-scrollbar.js"></script>
<script src="/plugins/p-scroll/pscroll.js"></script>
<script src="/plugins/p-scroll/pscroll-1.js"></script>
