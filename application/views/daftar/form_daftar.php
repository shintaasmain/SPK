<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?= $title ?></title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/assets/css/style.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/assets/css/components.css');?>">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="<?php echo base_url('assets/admin/assets/img/stisla-fill.svg');?>" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Daftar</h4></div>

              <div class="card-body">

              <?php if ($this->session->flashdata('success')) { ?>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<?= $this->session->flashdata('success') ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<?php } elseif ($this->session->flashdata('error')) { ?>
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<?= $this->session->flashdata('error') ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<?php } ?>

                  <form method="POST" action="<?= base_url('daftar/aksi_daftar') ?>" class="needs-validation"
							novalidate="">
							<div class="row">
								<div class="form-group col-12">
									<label for="nama_admin">Nama Lengkap</label>
									<input id="nama_admin" type="text" class="form-control" name="nama_admin" autofocus required>
									<div class="invalid-feedback">
										Nama lengkap tidak boleh kosong !
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="username_admin">Username</label>
								<input id="username_admin" type="text" class="form-control" name="username_admin" required>
								<div class="invalid-feedback">
									Username tidak boleh kosong !
								</div>
							</div>

							<div class="row">
								<div class="form-group col-12">
									<label for="pass_admin" class="d-block">Password</label>
									<input id="pass_admin" type="password" class="form-control pwstrength"
										data-indicator="pwindicator" name="pass_admin" required>
									<div class="invalid-feedback">
										Password tidak boleh kosong !
									</div>
									<div id="pwindicator" class="pwindicator">
										<div class="bar"></div>
										<div class="label"></div>
									</div>
								</div>
								
							</div>
                     <div class="row">
                     <div class="form-group col-12">
									<label for="password2" class="d-block">Password Confirmation</label>
									<input id="password2" type="password" class="form-control" name="password_confirm" required>
									<div class="invalid-feedback">
										Password Confirmation tidak boleh kosong !
									</div>
								</div>
                     </div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-lg btn-block">
									Daftar
								</button>
							</div>
						</form>

                <div class="col-md-12">Sudah Punya Akun ? <a href="<?= base_url('login') ?>">Masuk Sekarang</a></div>

              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; SPK 2022
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?php echo base_url('assets/admin/assets/js/stisla.js');?>"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="<?php echo base_url('assets/admin/assets/js/scripts.js');?>"></script>
  <script src="<?php echo base_url('assets/admin/assets/js/custom.js');?>"></script>

  <!-- Page Specific JS File -->
</body>
</html>
