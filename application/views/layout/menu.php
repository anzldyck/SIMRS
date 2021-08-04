<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-pink elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('dashboard'); ?>" class="brand-link navbar-pink">
      <img src="<?= base_url('assets/img/profil.jpg') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">RSIA IBNU SINA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('assets/img/profil/'). $user['image']; ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?= base_url('profil'); ?>" class="d-block"><?= $user['name'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <?php if($this->session->userdata('role_id') == '1') : ?>  
          <li class="nav-item has-treeview ">
            <a href="<?= base_url('admin') ?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <span class="right badge badge-warning">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">4</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/profil') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('pasien'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pasien</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('dokter'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Dokter</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('obat'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Obat</p>
                </a>
              
            </ul>
          </li>
          
          <li class="nav-header">MENU</li>
          <li class="nav-item">
            <a href="<?= base_url('poliklinik'); ?>" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Poliklinik
                <span class="badge badge-info right">4</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('registrasi') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Rawat Jalan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('rekam_medis') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Rekam Medis
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('resep') ?>" class="nav-link">
              <i class="nav-icon far fas fa-notes-medical"></i>
              <p>
                Resep Obat
              </p>
            </a>
          </li>
          
          
            
          
          <li class="nav-header">DOKUMEN</li>
          <li class="nav-item">
            <a href="<?= base_url('pembayaran') ?>" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Struk</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('laporan') ?>" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Laporan Rawat Jalan</p>
            </a>
          </li>

          <?php elseif($this->session->userdata('role_id') == '2') : ?>

            <li class="nav-item has-treeview ">
            <a href="<?= base_url('user_dokter') ?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <span class="right badge badge-warning">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">4</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/profil') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('pasien'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pasien</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('dokter'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Dokter</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('obat'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Obat</p>
                </a>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('rekam_medis') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Rekam Medis
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('resep') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Resep Obat
              </p>
            </a>
          </li>
            <?php elseif($this->session->userdata('role_id') == '3') : ?>
              <li class="nav-item has-treeview ">
            <a href="<?= base_url('admin') ?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <span class="right badge badge-warning">New</span>
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">4</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/profil') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('pasien'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pasien</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('dokter'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Dokter</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('obat'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Obat</p>
                </a>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('resep') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Resep Obat
              </p>
            </a>
          </li>
            <?php endif; ?>
          <li class="nav-header">MENU</li>
          <li class="nav-item">
            <a href="<?= base_url('login/logout'); ?>" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?= $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active"><?= $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-12">
          <div class="card">
              <!-- <div class="card-header">
                <h3 class="card-title"></h3>
              </div> -->
              <!--card-header -->
              <div class="card-body">
         
        
      
   
      
