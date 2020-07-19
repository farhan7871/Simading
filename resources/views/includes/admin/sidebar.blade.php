 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">Mading Online Fakultas Teknik</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->

    <li class="nav-item">
        <a class="nav-link disable">    
            <span>Selamat Datang, </span></a>
    </li>

    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-home"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('kelola-mading')}}">
            <i class="fas fa-folder-plus"></i>
            <span>Kelola Mading</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('kelola-kategori')}}">
            <i class="fas fa-folder-plus"></i>
            <span>Kelola Kategori</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="table_pembelian.html">
            <i class="fas fa-user"></i>
            <span>User</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="table_pembelian.html">
            <i class="fas fa-power-off"></i>
            <span>Logout</span></a>
    </li>
    

    <!-- Divider -->
    <hr class="sidebar-divider">

</ul>
<!-- End of Sidebar -->