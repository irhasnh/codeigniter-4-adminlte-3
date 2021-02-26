<?= $this->extend('layouts/backend/app') ?>

<!-- Title -->
<?= $this->section('title') ?>
	Starter Page
<?= $this->endSection() ?>
<!-- Title -->

<!-- Content Title -->
<?= $this->section('contentTitle') ?>
	Starter Page
<?= $this->endSection() ?>
<!-- Content Title -->

<?= $this->section('content') ?>
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          Starter Header
        </div>
        <div class="card-body">
          Starter content here
        </div>
        <div class="card-footer">
          Starter Footer
        </div>
      </div>
    </div>
  </div>
<?= $this->endSection() ?>