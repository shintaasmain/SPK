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
            <h2 class="section-title">Matrik Keputusan (X)</h2>
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
            <h2 class="section-title">Matrik Ternormalisasi (R)</h2>
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
                    <h4>Kriteria C1</h4>
                    <?php foreach ($kriteriaC1 as $k) {?>
     								<h><?= $k->jenis;?> <?php } ?> </h>  = <?php if ($k -> jenis == 'benefit'){ ?> <?php foreach ($max1 as $max) { ?> <td><?= $max->C1 ?></td> <?php } ?> <?php } else if($k -> jenis == 'cost') { ?> <?php foreach ($min1 as $min) { ?> <td><?= $min->C1 ?></td> <?php } ?> <?php } ?> 
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
                    <h4>Kriteria C2</h4>
                    <?php foreach ($kriteriaC2 as $k) {?>
     								<h><?= $k->jenis;?> <?php } ?> </h>  = <?php if ($k -> jenis == 'benefit'){ ?> <?php foreach ($max2 as $max) { ?> <td><?= $max->C2 ?></td> <?php } ?> <?php } else if($k -> jenis == 'cost') { ?> <?php foreach ($min2 as $min) { ?> <td><?= $min->C2 ?></td> <?php } ?> <?php } ?> 
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
                    <h4>Kriteria C3</h4>
                    <?php foreach ($kriteriaC3 as $k) {?>
     				<h><?= $k->jenis;?> <?php } ?> </h>  = <?php if ($k -> jenis == 'benefit'){ ?> <?php foreach ($max3 as $max) { ?> <td><?= $max->C3 ?></td> <?php } ?> <?php } else if($k -> jenis == 'cost') { ?> <?php foreach ($min3 as $min) { ?> <td><?= $min->C3 ?></td> <?php } ?> <?php } ?> 
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
                    <h4>Kriteria C4</h4>
                    <?php foreach ($kriteriaC4 as $k) {?>
     								<h><?= $k->jenis;?> <?php } ?> </h>  = <?php if ($k -> jenis == 'benefit'){ ?> <?php foreach ($max4 as $max) { ?> <td><?= $max->C4 ?></td> <?php } ?> <?php } else if($k -> jenis == 'cost') { ?> <?php foreach ($min4 as $min) { ?> <td><?= $min->C4 ?></td> <?php } ?> <?php } ?> 
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
													<td ><?= (double)$min->C4 / (double)$item->C4 ?></td>
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
                    <h4>Kriteria C5</h4>
                    <?php foreach ($kriteriaC5 as $k) {?>
     								<h><?= $k->jenis;?> <?php } ?> </h>  = <?php if ($k -> jenis == 'benefit'){ ?> <?php foreach ($max5 as $max) { ?> <td><?= $max->C5 ?></td> <?php } ?> <?php } else if($k -> jenis == 'cost') { ?> <?php foreach ($min5 as $min) { ?> <td><?= $min->C5 ?></td> <?php } ?> <?php } ?> 
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

				<div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
     				<div class="table-responsive">
     								<table class="table table-striped table-md">
										<?php foreach ($alternatif as $item) { ?>
											<?php if ($k-> jenis == 'benefit') {?>
													<?php foreach ($max1 as $max) { ?>
													<td> <?php
													$hasil1 = (double)$item->C1 / (double)$max->C1;
													
													$rangking1 = $hasil1 * 0.3;
													echo $rangking1;
													?> 
													
													</td>
													<?php } ?>
												<?php } else if ($k -> jenis == 'cost') {?> 
													<?php foreach ($min2 as $min) { ?>
													<td><?php 
														$hasil2 = (double)$min->C1 / (double)$item->C1;
														$rangking2 = $hasil2 * 0.3;
														echo $rangking2;
														?>
													</td>
													<?php } ?>
												<?php } ?>
											<?php if ($k-> jenis == 'benefit') {?>
													<?php foreach ($max2 as $max) { ?>
													<td><?php 
														$hasil3 = (double)$item->C2 / (double)$max->C2;
														$rangking3 = $hasil3 * 0.3;
														echo $rangking3;?>
													</td>
													<?php } ?>
												<?php } else if ($k -> jenis == 'cost') {?> 
													<?php foreach ($min2 as $min) { ?>
													<td><?php 
														$hasil4 = (double)$min->C2 / (double)$item->C2;
														$rangking4 = $hasil4 * 0.3;
														echo $rangking4; ?>
													</td>
													<?php } ?>
												<?php } ?>
											<?php if ($k-> jenis == 'benefit') {?>
													<?php foreach ($max3 as $max) { ?>
													<td><?php 
														$hasil5 = (double)$item->C3 / (double)$max->C3;
														$rangking5 = $hasil5 * 0.2;
														echo $rangking5; ?>
													</td>
													<?php } ?>
												<?php } else if ($k -> jenis == 'cost') {?> 
													<?php foreach ($min3 as $min) { ?>
													<td><?php 
														$hasil6 = (double)$min->C3 / (double)$item->C3;
														$rangking6 = $hasil6 * 0.2;
														echo $rangking6; ?>
													</td>
													<?php } ?>
												<?php } ?>
											<?php if ($k-> jenis == 'benefit') {?>
													<?php foreach ($max4 as $max) { ?>
													<td><?php 
														$hasil7 = (double)$item->C4 / (double)$max->C4;
														$rangking7 = $hasil7 * 0.1;
														echo $rangking7; ?></td>
													<?php } ?>
												<?php } else if ($k -> jenis == 'cost') {?> 
													<?php foreach ($min4 as $min) { ?>
													<td><?php 
														$hasil8 = (double)$min->C4 / (double)$item->C4;
														$rangking8 = $hasil8 * 0.1;
														echo $rangking8; ?></td>
													<?php } ?>
												<?php } ?>
												<!-- <td><?= $item->C4 ?></td> -->
												<?php if ($k-> jenis == 'benefit') {?>
													<?php foreach ($max5 as $max) { ?>
													<td><?php 
														$hasil9 = (double)$item->C5 / (double)$max->C5;
														$rangking9 = $hasil9 * 0.1;
														echo $rangking9; ?></td>
													<?php } ?>
												<?php } else if ($k -> jenis == 'cost') {?> 
													<?php foreach ($min5 as $min) { ?>
													<td><?php $hasil10 = (double)$min->C5 / (double)$item->C5;
													$rangking10 = $hasil10 * 0.1;
													echo $rangking10; ?></td>
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



          </div>
        </section>
      </div>

<script>
  function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
  }
</script>
<!-- Hapus MODAL -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
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

