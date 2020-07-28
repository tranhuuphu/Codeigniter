    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
          </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>

    </nav>
    <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?= base_url('/admin/dashboard') ?>" class="brand-link">
        
        <span class="brand-text font-weight-light text-center" style="text-align: center; margin-left: 33px;">Admin</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="<?= base_url('/admin/dashboard') ?>" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>

            </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tree"></i>
                <p>
                  UI Elements
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">

                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ribbons</p>
                  </a>
                </li>
              </ul>
            </li>


            <li class="nav-header">EXAMPLES</li>



            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Post
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="border:1px solid yellow">
                <li class="nav-item">
                  <a href="<?= base_url('/admin/post') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>List Post</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('/admin/post/add') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add New</p>
                  </a>
                </li>
                
              </ul>
            </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-circle"></i>
                <p>
                  Cate
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="border:1px solid red">
                <li class="nav-item">
                  <a href="<?= base_url('/admin/cate') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>List Cate</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('/admin/cate/add') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Cate</p>
                  </a>
                </li>
                
              </ul>
            </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fas fa-book"></i>
                <p>
                  Page
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="border:1px solid red">
                <li class="nav-item">
                  <a href="<?= base_url('/admin/page') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>List Page</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('/admin/page/add') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add New Page</p>
                  </a>
                </li>
                
              </ul>
            </li>




          </ul>
        </nav>
        <!-- /.sidebar-menu -->
        <hr>
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          
          <div class="info">

            <label class="text-white">Signing As: <?= session()->get('name'); ?></label>
          </div>
          <div class="" style="margin-top: 0px;">
            <a href="auth/logout" class="btn btn-danger text-white"><i class="fas fa-sign-out-alt"></i> Logout</a>
          </div>
        </div>
      </div>
      <!-- /.sidebar -->
  </aside>