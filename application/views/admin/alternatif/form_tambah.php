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
									<div class="form-group row">
										<?php foreach ($alternatif as $a):?>
										<input type="hidden" class="form-control" id="inputEmail3" name="id_alternatif" placeholder="" value="<?= $a->id_alternatif?>">
										<?php endforeach;?>
									</div>
										<div class="form-group">
											<label>Kriteria</label>
											<select class="form-control" name="kriteria" id="kriteria" required>
												<option value="">Pilih....</option>
												<?php foreach($kriteria as $row):?>
												<option value="<?php echo $row->id_kriteria;?>"><?php echo $row->nama_kriteria;?></option>
												<?php endforeach;?>
											</select>
										</div>
										<div class="form-group">
											<label>Sub Kriteria</label>
											<select class="form-control" id="subkriteria" name="subkriteria" required>
											</select>
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



