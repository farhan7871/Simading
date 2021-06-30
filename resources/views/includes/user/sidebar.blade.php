 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('tampilan')}}">
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

    {{-- menuju dashboard admin --}}
    <li class="nav-item">
        <a class="nav-link" href="{{route('tampilan')}}">
            <i class="fas fa-home"></i>
            <span>Dashboard</span></a>
    </li>


     {{-- menuju halaman kelola mading --}}
    <li class="nav-item">
        <a class="nav-link" href="{{route('kelola-mading.index')}}">
            <i class="fas fa-folder-plus"></i>
            <span>Kelola Mading</span></a>
    </li>


         {{-- keluar --}}
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
    
            <i class="fas fa-power-off"></i>
            <span>Logout</span></a>
    </li>
    

    <!-- Divider -->
    <hr class="sidebar-divider">

</ul>
<!-- End of Sidebar -->