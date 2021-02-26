<?= $this->extend('layouts/backend/app') ?>

<!-- Title -->
<?= $this->section('title') ?>
	Manage Users
<?= $this->endSection() ?>
<!-- Title -->

<!-- Content Title -->
<?= $this->section('contentTitle') ?>
	Manage Users
<?= $this->endSection() ?>
<!-- Content Title -->

<!-- Css -->
<?= $this->section('css') ?>
<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url('templates/backend/AdminLTE-3.0.1') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
<?= $this->endSection() ?>
<!-- Css -->

<!-- Content -->
<?= $this->section('content') ?>
<?= $this->include('layouts/components/alert-dismissible') ?>

	<div class="card">
            <div class="card-header">
              <a href="<?= base_url('admin/users/new') ?>" class="btb btn-primary btn-sm">Tambah Data</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="datatable1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                <?php foreach($users as $user) : ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $user->name ?></td>
                  <td><?= $user->username ?></td>
                  <td><?= $user->email ?></td>
                  <td>
                  	<div class="row ml-2">
                  		<a href="<?= base_url('admin/users/'.$user->id.'/edit') ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
                  		<form action="<?= base_url('admin/users/'.$user->id) ?>" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <?= csrf_field() ?>
                  			<button onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm ml-2" type="submit"><i class="fas fa-trash fa-fw"></i></button>
                  		</form>
                  	</div>
                  </td>
                </tr>
            	<?php endforeach ?>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
<?= $this->endSection() ?>
<!-- Content -->

<!-- Js -->
<?= $this->section('js') ?>
<!-- DataTables -->
<script src="<?= base_url('templates/backend/AdminLTE-3.0.1') ?>/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url('templates/backend/AdminLTE-3.0.1') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<script>
  $(function () {
    $("#datatable1").DataTable();
    $('#datatable2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
    });
  });
</script>
<?= $this->endSection() ?>
<!-- Js -->