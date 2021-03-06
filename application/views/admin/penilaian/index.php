     <!-- Main Content -->
     <div class="main-content">
     	<section class="section">
     		<div class="section-header">
     			<h1>Manajemen Penilaian</h1>
     			<div class="section-header-breadcrumb">
     				<div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
     				<div class="breadcrumb-item"><a href="#">Penilaian</a></div>
     				<div class="breadcrumb-item">Main</div>
     			</div>
     		</div>

     		<div class="section-body">
     			<h2 class="section-title">Matriks Keputusan (X)</h2>
     			<div class="row">
     				<div class="col-12">
     					<div class="card">
     						<div class="card-body">
     							<div class="table-responsive">
     								<table class="table table-striped table-md">
     									<thead>
     										<tr>
     											<th>No</th>
     											<th>Alternatif</th>
     											<?php foreach ($kriteria as $k) {?>
     											<th><?= $k->kode_kriteria?></th>
     											<?php } ?>
     										<tr>
     									</thead>
     									<tbody>
     										<?php 
										$no = 1;
										foreach ($alternatif as $item) { ?>
     										<tr>
     											<td scope="row" class="text-center"><?= $no++ ?></td>
     											<td><?= $item->nama_alternatif ?></td>
     											<td><?= $item->C1 ?></td>
     											<td><?= $item->C2  ?></td>
     											<td><?= $item->C3  ?></td>
     											<td><?= $item->C4  ?></td>
     											<td><?= $item->C5  ?></td>
     										</tr>
     										<?php } ?>
     									</tbody>
     								</table>
     							</div>
     						</div>
     					</div>
     				</div>
     			</div>
     		</div>
     		<div class="section-body">
     			<h2 class="section-title">Perhitungan Matriks Ternormalisasi (R)</h2>
     			<!-- KRITERIA -->
     			<div class="row">
     				<div class="col-12">
     					<div class="card">
     						<div class="card-body">
     							<div class="table-responsive">
     								<table class="table table-striped table-md">
     									<thead>
     										<tr>
     											<?php foreach ($kriteria as $k) {?>
     											<th><?= $k->jenis;?></th>
     											<?php } ?>
     										<tr>
     									</thead>
     									<tbody>
     										<?php 
										$no = 1;
										foreach ($alternatif as $item) { ?>
     										<tr>
     											<td><?= $item->C1 ?></td>
     											<td><?= $item->C2  ?></td>
     											<td><?= $item->C3  ?></td>
     											<td><?= $item->C4  ?></td>
     											<td><?= $item->C5  ?></td>
     										</tr>
     										<?php } ?>
     									</tbody>
     								</table>
     							</div>
     						</div>
     					</div>
     				</div>
     			</div>
     			<!-- C1 -->
     			<div class="row">
     				<div class="col-12">
     					<div class="card">
     						<div class="card-body">
     							<div class="table-responsive">
     								<h5>Kriteria C1</h5>
     								<?php foreach ($kriteriaC1 as $k) {?>
     								<h><?= $k->jenis;?> <?php } ?> </h> = <?php if ($k -> jenis == 'benefit'){ ?>
     								<?php foreach ($max1 as $max) { ?> <td><?= $max->C1 ?></td> <?php } ?>
     								<?php } else if($k -> jenis == 'cost') { ?> <?php foreach ($min1 as $min) { ?> <td>
     									<?= $min->C1 ?></td> <?php } ?> <?php } ?>
     								<table class="table table-striped table-md">
     									<thead>
     										<tr>
     											<?php foreach ($kriteriaC1 as $k) {?>
     											<th><?= $k->jenis;?></th>
     											<th>Hasil</th>
     										<tr>
     									</thead>
     									<tbody>
     										<?php foreach ($alternatif as $item) { ?>
     										<tr>
     											<td><?= $item->C1 ?></td>
     											<?php if ($k-> jenis == 'benefit') {?>
     											<?php foreach ($max1 as $max) { ?>
     											<td><?= (double)$item->C1 / (double)$max->C1 ?></td>
     											<?php } ?>
     											<?php } else if ($k -> jenis == 'cost') {?>
     											<?php foreach ($min1 as $min) { ?>
     											<td><?= (double)$min->C1 / (double)$item->C1 ?></td>
     											<?php } ?>
     											<?php } ?>
     											<?php } ?>
     										</tr>
     									</tbody>
     									<?php } ?>
     								</table>
     							</div>
     						</div>
     					</div>
     				</div>
     			</div>
     			<!-- C2 -->
     			<div class="row">
     				<div class="col-12">
     					<div class="card">
     						<div class="card-body">
     							<div class="table-responsive">
     								<h5>Kriteria C2</h5>
     								<?php foreach ($kriteriaC2 as $k) {?>
     								<h><?= $k->jenis;?> <?php } ?> </h> = <?php if ($k -> jenis == 'benefit'){ ?>
     								<?php foreach ($max2 as $max) { ?> <td><?= $max->C2 ?></td> <?php } ?>
     								<?php } else if($k -> jenis == 'cost') { ?> <?php foreach ($min2 as $min) { ?> <td>
     									<?= $min->C2 ?></td> <?php } ?> <?php } ?>
     								<table class="table table-striped table-md">
     									<thead>
     										<tr>
     											<?php foreach ($kriteriaC2 as $k) {?>
     											<th><?= $k->jenis;?></th>
     											<th>Hasil</th>
     										<tr>
     									</thead>
     									<tbody>
     										<?php foreach ($alternatif as $item) { ?>
     										<tr>
     											<td><?= $item->C2 ?></td>
     											<?php if ($k-> jenis == 'benefit') {?>
     											<?php foreach ($max2 as $max) { ?>
     											<td><?= (double)$item->C2 / (double)$max->C2 ?></td>
     											<?php } ?>
     											<?php } else if ($k -> jenis == 'cost') {?>
     											<?php foreach ($min2 as $min) { ?>
     											<td><?= (double)$min->C2 / (double)$item->C2 ?></td>
     											<?php } ?>
     											<?php } ?>
     											<?php } ?>
     										</tr>
     									</tbody>
     									<?php } ?>
     								</table>
     							</div>
     						</div>
     					</div>
     				</div>
     			</div>
     			<!-- C3 -->
     			<div class="row">
     				<div class="col-12">
     					<div class="card">
     						<div class="card-body">
     							<div class="table-responsive">
     								<h5>Kriteria C3</h5>
     								<?php foreach ($kriteriaC3 as $k) {?>
     								<h><?= $k->jenis;?> <?php } ?> </h> = <?php if ($k -> jenis == 'benefit'){ ?>
     								<?php foreach ($max3 as $max) { ?> <td><?= $max->C3 ?></td> <?php } ?>
     								<?php } else if($k -> jenis == 'cost') { ?> <?php foreach ($min3 as $min) { ?> <td>
     									<?= $min->C3 ?></td> <?php } ?> <?php } ?>
     								<table class="table table-striped table-md">
     									<thead>
     										<tr>
     											<?php foreach ($kriteriaC3 as $k) {?>
     											<th><?= $k->jenis;?></th>
     											<th>Hasil</th>
     										<tr>
     									</thead>
     									<tbody>
     										<?php foreach ($alternatif as $item) { ?>
     										<tr>
     											<td><?= $item->C3 ?></td>
     											<?php if ($k-> jenis == 'benefit') {?>
     											<?php foreach ($max3 as $max) { ?>
     											<td><?= (double)$item->C3 / (double)$max->C3 ?></td>
     											<?php } ?>
     											<?php } else if ($k -> jenis == 'cost') {?>
     											<?php foreach ($min3 as $min) { ?>
     											<td><?= (double)$min->C3 / (double)$item->C3 ?></td>
     											<?php } ?>
     											<?php } ?>
     											<?php } ?>
     										</tr>
     									</tbody>
     									<?php } ?>
     								</table>
     							</div>
     						</div>
     					</div>
     				</div>
     			</div>
     			<!-- C4 -->
     			<div class="row">
     				<div class="col-12">
     					<div class="card">
     						<div class="card-body">
     							<div class="table-responsive">
     								<h5>Kriteria C4</h5>
     								<?php foreach ($kriteriaC4 as $k) {?>
     								<h><?= $k->jenis;?> <?php } ?> </h> = <?php if ($k -> jenis == 'benefit'){ ?>
     								<?php foreach ($max4 as $max) { ?> <td><?= $max->C4 ?></td> <?php } ?>
     								<?php } else if($k -> jenis == 'cost') { ?> <?php foreach ($min4 as $min) { ?> <td>
     									<?= $min->C4 ?></td> <?php } ?> <?php } ?>
     								<table class="table table-striped table-md">
     									<thead>
     										<tr>
     											<?php foreach ($kriteriaC4 as $k) {?>
     											<th><?= $k->jenis;?></th>
     											<th>Hasil</th>
     										<tr>
     									</thead>
     									<tbody>
     										<?php foreach ($alternatif as $item) { ?>
     										<tr>
     											<td><?= $item->C4 ?></td>
     											<?php if ($k-> jenis == 'benefit') {?>
     											<?php foreach ($max4 as $max) { ?>
     											<td><?= (double)$item->C4 / (double)$max->C4 ?></td>
     											<?php } ?>
     											<?php } else if ($k -> jenis == 'cost') {?>
     											<?php foreach ($min4 as $min) { ?>
     											<td><?= (double)$min->C4 / (double)$item->C4 ?></td>
     											<?php } ?>
     											<?php } ?>
     											<?php } ?>
     										</tr>
     									</tbody>
     									<?php } ?>
     								</table>
     							</div>
     						</div>
     					</div>
     				</div>
     			</div>
     			<!-- C5 -->
     			<div class="row">
     				<div class="col-12">
     					<div class="card">
     						<div class="card-body">
     							<div class="table-responsive">
     								<h5>Kriteria C5</h5>
     								<?php foreach ($kriteriaC5 as $k) {?>
     								<h><?= $k->jenis;?> <?php } ?> </h> = <?php if ($k -> jenis == 'benefit'){ ?>
     								<?php foreach ($max5 as $max) { ?> <td><?= $max->C5 ?></td> <?php } ?>
     								<?php } else if($k -> jenis == 'cost') { ?> <?php foreach ($min5 as $min) { ?> <td>
     									<?= $min->C5 ?></td> <?php } ?> <?php } ?>
     								<table class="table table-striped table-md">
     									<thead>
     										<tr>
     											<?php foreach ($kriteriaC5 as $k) {?>
     											<th><?= $k->jenis;?></th>
     											<th>Hasil</th>
     										<tr>
     									</thead>
     									<tbody>
     										<?php foreach ($alternatif as $item) { ?>
     										<tr>
     											<td><?= $item->C4 ?></td>
     											<?php if ($k-> jenis == 'benefit') {?>
     											<?php foreach ($max5 as $max) { ?>
     											<td><?= (double)$item->C5 / (double)$max->C5 ?></td>
     											<?php } ?>
     											<?php } else if ($k -> jenis == 'cost') {?>
     											<?php foreach ($min5 as $min) { ?>
     											<td><?= (double)$min->C5 / (double)$item->C5 ?></td>
     											<?php } ?>
     											<?php } ?>
     											<?php } ?>
     										</tr>
     									</tbody>
     									<?php } ?>
     								</table>
     							</div>
     						</div>
     					</div>
     				</div>
     			</div>
     			<!-- HASIL TERNORMALISASI -->
     			<div class="row">
     				<div class="col-12">
     					<div class="card">
     						<div class="card-body">
     							<h5>Matriks Ternormalisasi (R)</h5>
     							<div class="table-responsive">
     								<table class="table table-striped table-md">
     									<?php foreach ($alternatif as $item) { ?>
     									<?php if ($k-> jenis == 'benefit') {?>
     									<?php foreach ($max1 as $max) { ?>
     									<td> <?php
													$hasil1 = (double)$item->C1 / (double)$max->C1;
													echo $hasil1;
													$rangking1 = $hasil1 * 0.3;
													?>

     									</td>
     									<?php } ?>
     									<?php } else if ($k -> jenis == 'cost') {?>
     									<?php foreach ($min2 as $min) { ?>
     									<td><?= $hasil2 = (double)$min->C1 / (double)$item->C1 ?></td>
     									<?php } ?>
     									<?php } ?>
     									<?php if ($k-> jenis == 'benefit') {?>
     									<?php foreach ($max2 as $max) { ?>
     									<td><?= $hasil3 = (double)$item->C2 / (double)$max->C2 ?></td>
     									<?php } ?>
     									<?php } else if ($k -> jenis == 'cost') {?>
     									<?php foreach ($min2 as $min) { ?>
     									<td><?= $hasil4 = (double)$min->C2 / (double)$item->C2 ?></td>
     									<?php } ?>
     									<?php } ?>
     									<?php if ($k-> jenis == 'benefit') {?>
     									<?php foreach ($max3 as $max) { ?>
     									<td><?= $hasil5 = (double)$item->C3 / (double)$max->C3 ?></td>
     									<?php } ?>
     									<?php } else if ($k -> jenis == 'cost') {?>
     									<?php foreach ($min3 as $min) { ?>
     									<td><?= $hasil6 = (double)$min->C3 / (double)$item->C3 ?></td>
     									<?php } ?>
     									<?php } ?>
     									<?php if ($k-> jenis == 'benefit') {?>
     									<?php foreach ($max4 as $max) { ?>
     									<td><?= $hasil7 = (double)$item->C4 / (double)$max->C4 ?></td>
     									<?php } ?>
     									<?php } else if ($k -> jenis == 'cost') {?>
     									<?php foreach ($min4 as $min) { ?>
     									<td><?= $hasil8 = (double)$min->C4 / (double)$item->C4 ?></td>
     									<?php } ?>
     									<?php } ?>
     									<!-- <td><?= $item->C4 ?></td> -->
     									<?php if ($k-> jenis == 'benefit') {?>
     									<?php foreach ($max5 as $max) { ?>
     									<td><?= $hasil9 = (double)$item->C5 / (double)$max->C5 ?></td>
     									<?php } ?>
     									<?php } else if ($k -> jenis == 'cost') {?>
     									<?php foreach ($min5 as $min) { ?>
     									<td><?= $hasil10 = (double)$min->C5 / (double)$item->C5 ?></td>
     									<?php } ?>
     									<?php } ?>
     									</tr>
     									<?php } ?>
     								</table>
     							</div>
     						</div>
     					</div>
     				</div>
     			</div>
     			<h2 class="section-title">Hitung Perangkingan</h2>
     			<div class="row">
     				<div class="col-12">
     					<div class="card">
     						<div class="card-body">
							  
     										<a href="<?= base_url('penilaian/reset_penilaian');?>" class="btn btn-danger  btn-sm submit-reset float-right mb-4 mr-3">Reset Penilaian </a>
     									
     							<form action="<?= base_url('penilaian/post') ?>" method="post" id="simpan">

     								<div class="table-responsive">
     									<table class="table table-striped table-md">
											
     										<?php foreach ($alternatif as $item) { ?>
     										<?php foreach ($bobotC1 as $bobot1) { ?>
     										<?php if ($k-> jenis == 'benefit') {?>
     										<?php foreach ($max1 as $max) { ?>
     										<td> <?php
													$hasil1 = (double)$item->C1 / (double)$max->C1;
													
													$rangking1 = $hasil1 * $bobot1->bobot;
													echo $rangking1;
													?>

     										</td>
     										<?php } ?>
     										<?php } else if ($k -> jenis == 'cost') {?>
     										<?php foreach ($min2 as $min) { ?>
     										<td><?php 
														$hasil2 = (double)$min->C1 / (double)$item->C1;
														$rangking2 = $hasil2 * $bobot1->bobot;
														echo $rangking2;
														?>
     										</td>
     										<?php } ?>
     										<?php } ?>
     										<?php } ?>
     										<?php foreach ($bobotC2 as $bobot2) { ?>
     										<?php if ($k-> jenis == 'benefit') {?>
     										<?php foreach ($max2 as $max) { ?>
     										<td><?php 
														$hasil3 = (double)$item->C2 / (double)$max->C2;
														$rangking3 = $hasil3 * $bobot2->bobot;
														echo $rangking3;?>
     										</td>
     										<?php } ?>
     										<?php } else if ($k -> jenis == 'cost') {?>
     										<?php foreach ($min2 as $min) { ?>
     										<td><?php 
														$hasil4 = (double)$min->C2 / (double)$item->C2;
														$rangking4 = $hasil4 * $bobot2->bobot;
														echo $rangking4; ?>
     										</td>
     										<?php } ?>
     										<?php } ?>
     										<?php } ?>
     										<?php foreach ($bobotC3 as $bobot3) { ?>
     										<?php if ($k-> jenis == 'benefit') {?>
     										<?php foreach ($max3 as $max) { ?>
     										<td><?php 
														$hasil5 = (double)$item->C3 / (double)$max->C3;
														$rangking5 = $hasil5 * $bobot3->bobot;
														echo $rangking5; ?>
     										</td>
     										<?php } ?>
     										<?php } else if ($k -> jenis == 'cost') {?>
     										<?php foreach ($min3 as $min) { ?>
     										<td><?php 
														$hasil6 = (double)$min->C3 / (double)$item->C3;
														$rangking6 = $hasil6 * $bobot3->bobot;
														echo $rangking6; ?>
     										</td>
     										<?php } ?>
     										<?php } ?>
     										<?php } ?>
     										<?php foreach ($bobotC4 as $bobot4) { ?>
     										<?php if ($k-> jenis == 'benefit') {?>
     										<?php foreach ($max4 as $max) { ?>
     										<td><?php 
														$hasil7 = (double)$item->C4 / (double)$max->C4;
														$rangking7 = $hasil7 * $bobot4->bobot;
														echo $rangking7; ?></td>
     										<?php } ?>
     										<?php } else if ($k -> jenis == 'cost') {?>
     										<?php foreach ($min4 as $min) { ?>
     										<td><?php 
														$hasil8 = (double)$min->C4 / (double)$item->C4;
														$rangking8 = $hasil8 * $bobot4->bobot;
														echo $rangking8; ?></td>
     										<?php } ?>
     										<?php } ?>
     										<?php } ?>
     										<?php foreach ($bobotC5 as $bobot5) { ?>
     										<?php if ($k-> jenis == 'benefit') {?>
     										<?php foreach ($max5 as $max) { ?>
     										<td><?php 
														$hasil9 = (double)$item->C5 / (double)$max->C5;
														$rangking9 = $hasil9 * $bobot5 -> bobot;
														echo $rangking9; ?></td>
     										<?php } ?>
     										<?php } else if ($k -> jenis == 'cost') {?>
     										<?php foreach ($min5 as $min) { ?>
     										<td><?php $hasil10 = (double)$min->C5 / (double)$item->C5;
													$rangking10 = $hasil10 * $bobot5 ->bobot;
													echo $rangking10; ?></td>
     										<?php } ?>
     										<?php } ?>
     										<?php } ?>
     										<td> <input type="hidden" name="id_alternatif[]"
     												value="<?= $item->id_alternatif; ?> ">
     											<?php for ($i=0; $i<1; $i++) { ?>
     											<?php if ($k-> jenis == 'benefit') {?>
     											<?php $rangkingbenefit = $rangking1+$rangking3+$rangking5+$rangking7+$rangking9;?>
     										<td> <input class="form-control" name="hasil[]" value="<?= $rangkingbenefit; ?> "
     												readonly>
     										</td>
     										<?php } else if ($k -> jenis == 'cost') {?>
     										<?php $rangkingcost = $rangking2+$rangking4+$rangking6+$rangking8+$rangking10;?>
     										<td><input name="hasil[]" value="<?= $rangkingcost; ?> " readonly>
     										</td>
     										<?php } ?>
     										<?php } ?>
     										</tr>
     										<?php } ?>

     										<input type="hidden" name="jumlah" value="<?=$total_data;?>">
     									</table>
     									<div class="form-group">
     										<button type="submit" class="btn btn-primary  btn-sm submit-reset">Simpan </button>
     									</div>
     								</div>
     							</form>
     						</div>
     					</div>
     				</div>
     			</div>


     			<!-- HASIL PERANGKINGAN -->
     			<h2 class="section-title">Perangkingan</h2>
     			<div class="row">
     				<div class="col-12">
     					<div class="card">
     						<div class="card-body">
     							<div class="table-responsive">
     								<table class="table table-striped table-md">
     									<thead>
     										<tr>
     											<th>Rangking</th>
     											<th>Alternatif</th>
     											<th>Nilai</th>
     										<tr>
     									</thead>
     									<tbody>
     										<?php 
										$no=1;
										foreach ($hasil_rangking as $item) { ?>
     										<tr>
     											<td><?= $no++ ?></td>
     											<td><?= $item->nama_alternatif ?></td>
     											<td><?= $item->hasil ?></td>
     											<?php } ?>
     										</tr>
     									</tbody>
     								</table>
     							</div>
     						</div>
     					</div>
     				</div>
     			</div>

     			<!-- KESIMPULAN -->
     			<h2 class="section-title">Keputusan</h2>
     			<div class="row">
     				<div class="col-12">
     					<div class="card">
     						<div class="card-body">

     							Dari beberapa alternatif yang telah Anda masukkan dapat diambil sebuah keputusan perguruan
     							tinggi terbaik adalah <b> <?php foreach ($keputusan as $K) {?> <?= $K->nama_alternatif ?>
     								<?php }?> </b>



     						</div>
     					</div>
     				</div>
     			</div>
     	</section>
     </div>

     <script>
     	function deleteConfirm(url) {
     		$('#btn-delete').attr('href', url);
     		$('#deleteModal').modal();
     	}

     </script>

     $(document).ready(function(){

     })
     <script>
     	function tambah() {
     		$.ajax({
     			url: $("#simpan").attr(action),
     			type: 'post',
     			cache: false,
     			dataType: "json",
     			data: $("#simpan").serialize(),
     			success: function ($data) {
     				if (data.success == true) {
     					$('.input1').val('');
     					$('.input2').val('');
     				}
     			}
     		});
     	}

     </script>
     <!-- Hapus MODAL -->
     <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     	aria-hidden="true">
     	<div class="modal-dialog" role="document">
     		<div class="modal-content">
     			<div class="modal-header">
     				<h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin?</h5>
     				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
     					<span aria-hidden="true">??</span>
     				</button>
     			</div>
     			<div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
     			<div class="modal-footer">
     				<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
     				<a id="btn-delete" class="btn btn-danger" href="#">Hapus</a>
     			</div>
     		</div>
     	</div>
     </div>
