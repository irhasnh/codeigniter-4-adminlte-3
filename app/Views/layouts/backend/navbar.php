<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-fw fa-bars"></i></a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-user"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header"><?= user()->username ?></span>
        <div class="dropdown-divider"></div>
        <a href="/" target="_blank" class="dropdown-item">
          <i class="fas fa-fw fa-globe mr-2"></i> Website
        </a>
        <div class="dropdown-divider"></div>
        <a href="<?= base_url('admin/profile') ?>" class="dropdown-item">
          <i class="fas fa-fw fa-user mr-2"></i> Profile
        </a>
        <div class="dropdown-divider"></div>
            <button class="dropdown-item" data-toggle="modal" data-target="#logoutModal" type="button"><i class="fas fa-fw fa-sign-out-alt mr-2"></i> Logout</button>
      </div>
    </li>
  </ul>
</nav>


<!-- LogoutModal -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logoutModalLabel">Yakin Logout ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form action="<?= base_url('logout') ?>" method="post">
          <?= csrf_field() ?>
          <button type="submit" class="btn btn-primary">Logout</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- LogoutModal -->