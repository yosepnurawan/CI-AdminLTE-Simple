<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
        <img src="<?=base_url();?>assets/admin-lte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- search form -->
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
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU UTAMA</li>
        <li class="treeview">
        <a href="#">
            <i class="fa fa-database"></i> <span>Menu Master</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?=base_url();?>assets/admin-lte/index.html"><i class="fa fa-check"></i> Data Karyawan</a></li>
            <li><a href="<?=base_url();?>assets/admin-lte/index2.html"><i class="fa fa-check"></i> Data Jabatan</a></li>
            <li><a href="<?=base_url();?>assets/admin-lte/index2.html"><i class="fa fa-check"></i> Data Barang</a></li>
            <li><a href="<?=base_url();?>assets/admin-lte/index2.html"><i class="fa fa-check"></i> Data Jenis Barang</a></li>
            <li><a href="<?=base_url();?>assets/admin-lte/index2.html"><i class="fa fa-check"></i> Data Supplier</a></li>
        </ul>
        </li>
        <li class="treeview">
        <a href="#">
            <i class="fa fa-database"></i> <span>Menu Transaksi</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?=base_url();?>assets/admin-lte/index.html"><i class="fa fa-check"></i> Pembelian</a></li>
            <li><a href="<?=base_url();?>assets/admin-lte/index2.html"><i class="fa fa-check"></i> Penjualan</a></li>
        </ul>
        </li>
        <li class="treeview">
        <a href="#">
            <i class="fa fa-area-chart"></i> <span>Menu Report</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?=base_url();?>assets/admin-lte/index.html"><i class="fa fa-check"></i> Pembelian</a></li>
            <li><a href="<?=base_url();?>assets/admin-lte/index2.html"><i class="fa fa-check"></i> Penjualan</a></li>
        </ul>
        </li>
        <li><a href="<?=base_url();?>login/logout"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
    </ul>
    </section>
    <!-- /.sidebar -->
</aside>