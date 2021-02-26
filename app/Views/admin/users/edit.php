<?= $this->extend('layouts/backend/app') ?>

<!-- Title -->
<?= $this->section('title') ?>
	Edit User
<?= $this->endSection() ?>
<!-- Title -->

<!-- Content Title -->
<?= $this->section('contentTitle') ?>
	Edit User
<?= $this->endSection() ?>
<!-- Content Title -->

<?= $this->section('content') ?>

  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <a href="<?= base_url('admin/users') ?>" class="btb btn-danger btn-sm">Kembali</a>
        </div>
        <div class="card-body">
          <form action="<?= base_url('admin/users/'.$user->id) ?>" method="POST">
            <input type="hidden" name="_method" value="PATCH">
            <?= csrf_field() ?>
            <div class="form-group">
              <label for="name">Name</label>
              <input value="<?= $user->name ?>" required="" type="text" class="form-control" name="name" id="name" placeholder="example : Rikka Takanashi">
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input value="<?= $user->username ?>" required="" type="text" class="form-control" name="username" id="username" placeholder="example : rikka">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input value="<?= $user->email ?>" required="" type="email" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input value="<?= $user->password ?>" required="" type="hidden" class="form-control" name="old_password" id="old_password">
              <input type="password" class="form-control" name="password" id="password">
              <small>Kosongkan kolom password jika tidak ingin mengubah data</small>
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-sm" type="submit">UPDATE</button>
            </div>
          </form>
        </div>
        <div class="card-footer">
          
        </div>
      </div>
    </div>
  </div>
<?= $this->endSection() ?>