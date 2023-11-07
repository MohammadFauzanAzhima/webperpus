<!-- Sidebar -->
<ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-book"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Library<sup>40</sup></div>
</a>

<!-- Nav Item - Dashboard -->
<li class="nav-item"  {{ ($title === "Dashboard") ? 'active' : '' }}">
    <a class="nav-link" href="{{ url("/dashboard") }}">
<i class="fas fa-fw fa-tachometer-alt"></i>
<span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
Kelola Data
</div>

<!-- Nav Item - Data Master 
<li class="nav-item" {{ ($title === "Anggota" || $title === "Admin") ? 'active' : '' }}>
<a class="nav-link" href="#" data-toggle="collapse" data-target="#collapse"
    aria-expanded="true" aria-controls="collapse">
    <i class="far fa-folder-open"></i>
    <span>Data User</span>
</a>
<div id="collapse" class="collapse {{ ($title === "Anggota" || $title === "Admin") ? 'show' : '' }}"" aria-labelledby="heading" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item {{ ($title === "Anggota") ? 'active' : '' }}" href="{{ url("/anggota") }}">Anggota</a>
        <a class="collapse-item {{ ($title === "Admin") ? 'active' : '' }}" href="{{ url("/admin") }}">Admin</a>
    </div>
</div>
</li>
-->

<!-- Nav Item - Data Buku -->
<li class="nav-item" {{ ($title === "Buku") ? 'active' : '' }}">
<a class="nav-link" href="{{ url("/buku") }}">
    <i class="fas fa-swatchbook"></i>
    <span>Data Buku</span></a>
</li>

<!-- Nav Item - Data Transaksi 
<li class="nav-item" {{ ($title === "Fiksi" || $title === "Non Fiksi") ? 'active' : '' }}>
<a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo"
    aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-swatchbook"></i>
    <span>Data Buku</span>
</a>
<div id="collapseTwo" class="collapse {{ ($title === "Fiksi" || $title === "Non Fiksi") ? 'show' : '' }}"" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item {{ ($title === "Fiksi") ? 'active' : '' }}" href="{{ url("/fiksi") }}">Fiksi</a>
        <a class="collapse-item {{ ($title === "Non Fiksi") ? 'active' : '' }}" href="{{ url("/nonfiksi") }}">Non Fiksi</a>
    </div>
</div>
</li>
-->

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
Peminjaman Buku
</div>

<!-- Nav Item - Data Pengguna -->
<li class="nav-item" {{ ($title === "Peminjaman") ? 'active' : '' }}">
<a class="nav-link" href="{{ route('peminjaman.index') }}">
    <i class="far fa-address-book"></i>
    <span>Data Peminjaman</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
History 
</div>

<!-- Nav Item - Laporan -->
<li class="nav-item" {{ ($title === "History") ? 'active' : '' }}">
<a class="nav-link" href="{{ url("/history_peminjaman") }}">
    <i class="fas fa-fw fa-wrench"></i>
    <span>History Peminjaman</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
<button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->