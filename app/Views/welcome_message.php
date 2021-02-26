<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('plugins/bootstrap-4/css/bootstrap.min.css') ?>">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">WEB CI4</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      	<?php if(auth()) : ?>
      		<a class="nav-link" href="<?= base_url('admin') ?>">Dashboard</a>
      	<?php else : ?>
      		<a class="nav-link" href="<?= base_url('login') ?>">Login</a>
      	<?php endif ?>
      </li>
    </ul>
    <span class="navbar-text">

    </span>
  </div>
</nav>

<div class="container-fluid mt-5">
	
	<div class="jumbotron">
    <?php if(auth()) : ?>
    <h1 class="display-4">Selamat Datang di SIMPLE STARTER CI 4</h1>
    <?php endif ?>

    <?php if(auth()) : ?>
    <h1 class="display-4">Hello , <?= user()->name ?></h1>
    <?php endif ?>
    
    <p class="lead">simpel starter sb-admin-2 untuk Codeigniter 4, keuntungannya adalah kita tidak harus mengintegrasikan AdminLTE-3 dari awal.</p>
	  <hr class="my-4">

    <div class="row">
      
      <div class="col-lg-6 mb-3">
        <div class="card">
          <div class="card-header">
            Email & Password Login
          </div>

          <div class="card-body">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Email</th>
                  <th scope="col">Password</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>admin@example.com</td>
                  <td>password</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>rahmat@example.com</td>
                  <td>password</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>rikka@example.com</td>
                  <td>password</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>kaede@example.com</td>
                  <td>password</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card">
          <div class="card-header">Fitur Simpel</div>
          <div class="card-body">
            <ul>

              <li>Autentikasi</li>
              <li>Penggunaan Filter</li>
              <li>Profile</li>
              <li>Change Profile & Password</li>
              <li>Example Crud Datatable</li>
            </ul>

          </div>
        </div>
      </div>

    </div>
  </div>

</div>
<script type="text/javascript" src="<?= base_url('plugins/bootstrap-4/js/jquery.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('plugins/bootstrap-4/js/bootstrap.min.js') ?>"></script>
</body>
</html>