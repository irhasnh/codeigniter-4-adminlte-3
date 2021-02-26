<?= $this->extend('layouts/backend/app') ?>

<!-- Title -->
<?= $this->section('title') ?>
	Profile
<?= $this->endSection() ?>
<!-- Title -->

<!-- Content Title -->
<?= $this->section('contentTitle') ?>
	Profile
<?= $this->endSection() ?>
<!-- Content Title -->

<?= $this->section('content') ?>

<?= $this->include('layouts/components/alert-dismissible') ?>

  <div class="row">
    <div class="col-lg-6 mb-3">
      <div class="card">
        <div class="card-header">
          Profile
        </div>
        <div class="card-body">
          Name : <?= user()->name ?>
          <hr>
          Email : <?= user()->email ?>
          <hr>
        </div>
        <div class="card-footer">
          
        </div>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="card">
        <div class="card-header">
          Edit Profile
        </div>
        <div class="card-body">
          <form action="<?= base_url('admin/update-profile/'.user()->id) ?>" method="POST">
            <?= csrf_field() ?>
            <div class="form-group">
              <label for="name">Name</label>
              <input required type="text" name="name" id="name" value="<?= user()->name ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input required type="text" name="username" id="username" value="<?= user()->username ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input required type="text" name="email" id="email" value="<?= user()->email ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input required type="hidden" name="old_password" value="<?= user()->password ?>" class="form-control">
              <input type="password" name="password" id="password" value="" class="form-control" placeholder="password">
              <small>Kosongkan password jika tidak ingin mengubah password</small>
            </div>
            <div class="form-group">
             <button type="submit" class="btn btn-primary btn-sm">UPDATE</button>
            </div>
          </form>
        </div>
        <div class="card-footer">
          
        </div>
      </div>
    </div>
  </div>
<?= $this->endSection() ?>