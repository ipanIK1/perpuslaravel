<style>
  .main-sidebar{
    position:fixed;
    overflow-y: scroll;
    max-height: 150px;
  }
</style>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

  <!-- Sidebar user panel (optional) -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="img/avatar5.png" class="img-circle" alt="User Image" >
    </div>
    <div class="pull-left info">
      <p>{{ Auth::user()->name }}</p>
      <!-- Status -->
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>

  <!-- search form (Optional) -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search...">
      <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
    </div>
  </form>
  <!-- /.search form -->

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">HEADER</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="@yield('ac-dash')"><a href="{{ url('dashboard') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
    <li class="treeview @yield('ac-buku')">
      <a href="#"><i class="fa fa-book"></i> <span>Buku</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('buku/input') }}"><i class="fa fa-book"></i>Input Baru</a></li>
        <li><a href="{{ url('buku') }}"><i class="fa fa-folder-open"></i>Data Buku</a></li>
        <li><a href="{{ url('koleksi') }}"><i class="fa fa-leanpub"></i>Koleksi Buku</a></li>
        
      </ul>
    </li> 
    <li class="treeview @yield('ac-anggota')">
      <a href="#"><i class="fa fa-users"></i> <span>Anggota</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('anggota/input') }}"><i class="fa fa-user-plus"></i>Input Baru</a></li>
        <li><a href="{{ url('anggota') }}"><i class="fa fa-users"></i>Data Anggota</a></li>
      </ul>
    </li> 
    <li class="treeview @yield('ac-kategori')">
      <a href="#"><i class="fa fa-tags"></i> <span>Kategori</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        
        <li><a href="{{ url('kategori') }}"><i class="fa fa-bank"></i>data</a></li>
      </ul>
    </li>
    <li class="treeview @yield('ac-penerbit')">
      <a href="#"><i class="fa fa-industry"></i> <span>Penerbit</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        
        <li><a href="{{ url('penerbit') }}"><i class="fa fa-user"></i>Nama Penerbit Buku</a></li>
      </ul>
    </li>
    <li class="treeview @yield('ac-pengarang')">
      <a href="#"><i class="fa fa-pencil-square"></i> <span>Pengarang</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        
        <li><a href="{{ url('pengarang') }}"><i class="fa fa-pencil"></i>Nama Pengarang Buku</a></li>
      </ul>
    </li>
    <li class="treeview @yield('ac-rak')">
      <a href="#"><i class="fa fa-building"></i> <span>Rak Buku</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        
        <li><a href="{{url('rak')}}"><i class="fa fa-mail-reply-all"></i>Rak</a></li>
      </ul>
    </li>
    <li class="treeview @yield('ac-rental')">
      <a href="#"><i class="fa fa-shopping-cart"></i> <span>Rental Buku</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('trans/peminjaman') }}"><i class="fa fa-book"></i>Pinjam Buku</a></li>
        <li><a href="{{ url('trans/pengembalian') }}"><i class="fa fa-mail-reply-all"></i>Pengembalian</a></li>
      </ul>
    </li>
    <li class="treeview @yield('ac-user')">
      <a href="#"><i class="fa fa-key"></i> <span>User</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        
        <li><a href="{{ url('user') }}"><i class="fa fa-users"></i>Nama Pengguna</a></li>
      </ul>
    </li>
    <li class="treeview @yield('ac-report')">
      <a href="#"><i class="fa fa-pencil"></i> <span>Report</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('report/anggota') }}" target="blank"><i class="fa fa-user"></i>Anggota</a></li>
        <li><a href="{{ url('report/qrcode') }}" target="blank"><i class="fa fa-code"></i>QR Code</a></li>
      </ul>
    </li>


   
  </ul>
  <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>