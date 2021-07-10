 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
        <div class="sidebar-brand-text mx-3">Mading Online Fakultas Teknik</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->

    <li class="nav-item">
        <a class="nav-link disable">    
            <span>Selamat Datang, {{Auth::user()->name}}</span></a>
    </li>

    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- dashboard admin -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-home"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- kelola kategori -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('kelola-kategori.index')}}">
            <i class="fas fa-th-large"></i>
            <span>Kelola Kategori</span></a>
    </li>   

    <!-- kelola mading -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('kelola-mading.index')}}">
            <i class="fas fa-inbox"></i>
            <span>Kelola Mading</span></a>
    </li>

    <!-- kelola user -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('kelola-user.index')}}">
            <i class="fas fa-users"></i>
            <span>Kelola User</span></a>
    </li>

    <!-- logout -->
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
    
            <i class="fas fa-power-off"></i>
            <span>Logout</span></a>
    </li>
    

    <!-- Divider -->
    <hr class="sidebar-divider">

</ul>
<!-- End of Sidebar -->