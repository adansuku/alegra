<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center " href="{{ url('adminIndex') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-grin-hearts"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Alegra <sup>app</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Escritorio</span></a>
    </li>
    <!-- Sidebar Menu -->
    @include('layouts.menu')
    <!-- Divider -->

    <hr class="sidebar-divider">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>