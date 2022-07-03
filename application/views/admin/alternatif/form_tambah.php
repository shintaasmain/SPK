<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Form</h1>
			<div class="section-header-breadcrumb">
				<div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
				<div class="breadcrumb-item"><a href="#">Alternatif</a></div>
				<div class="breadcrumb-item">Tambah</div>
			</div>
		</div>
		<div class="section-body">
			<h2 class="section-title">Form</h2>
			<div class="row">

				<div class="col-12 col-md-6">
					<form method="post" action="<?php echo site_url('alternatif/simpan_detailAlternatif');?>">
						<div class="card">
							<div class="card">
								<div class="card-header">
									<h4>Form Tambah Kriteria Untuk Alternatif</h4>
								</div>
								<div class="card-body">
										<?php foreach ($alternatif as $a):?>
										<input type="hidden" class="form-control" id="inputEmail3" name="id_alternatif" placeholder="" value="<?= $a->id_alternatif?>">
										<?php endforeach;?><div class="form-group row">
										<label for="inputEmail3" class="col-sm-2">C1</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="inputEmail3" name="c1" placeholder="">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputEmail3" class="col-sm-2">C2</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="inputEmail3" name="c2" placeholder="">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputEmail3" class="col-sm-2">C3</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="inputEmail3" name="c3" placeholder="">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputEmail3" class="col-sm-2">C4</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="inputEmail3" name="c4" placeholder="">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputEmail3" class="col-sm-2">C5</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="inputEmail3" name="c5" placeholder="">
										</div>
									</div>

								</div>
								<div class="card-footer">
									<button type="submit" class="btn btn-primary">Simpan</button>
								</div>
							</div>
						</div>
				</div>
			</div>
	</section>
</div>



