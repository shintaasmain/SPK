     <!-- Main Content -->
     <div class="main-content">
     	<section class="section">
     		<div class="section-header">
     			<h1>Manajemen Kriteria</h1>
     			<div class="section-header-breadcrumb">
     				<div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
     				<div class="breadcrumb-item"><a href="#">Kriteria</a></div>
     				<div class="breadcrumb-item">Main</div>
     			</div>
     		</div>

     		<div class="section-body">
     			<h2 class="section-title">Data Kriteria</h2>
     			<div class="row">
     				<div class="col-12">
     					<div class="card">
     						<?php if(count($kriteria)<5){ ?>
     						<div class="card-header">
     							<a href="<?php echo site_url('kriteria/tambah');?>" class="btn btn-primary">
     								Tambah Kriteria</a>
     						</div>
     						<?php } else { ?>
     						<div class="card-header">
     							<em class="text-danger">*Jumlah kriteria sudah terpenuhi (5 Kriteria)</em>
     						</div>
     						<?php } ?>


     						<div class="card-body">
     							<div class="table-responsive">
     								<table class="table table-striped table-md" id="table-1">
										<thead>
											<tr>
     										<th>No</th>
     										<th>Kode Kriteria</th>
     										<th>Nama Kriteria</th>
     										<th>Bobot</th>
     										<th>Jenis</th>
     										<th>Action</th>
     									</tr>
										</thead>
										<tbody>
						<?php 
                        $no = 1;
                        foreach ($kriteria as $item): ?>
     									<tr>
     										<td><?php echo $no++;?></td>
     										<td><?php echo $item->kode_kriteria;?></td>
     										<td><?php echo $item->nama_kriteria;?></td>
     										<td><?php echo $item->bobot;?></td>
     										<td><?php echo $item->jenis;?></td>
     										<td><a href="<?php echo site_url('kriteria/getid/'.$item->id_kriteria);?>"
     												class="btn btn-warning">Edit</a>
     											<a onclick="deleteConfirm('<?php echo site_url('kriteria/hapus/'.$item->id_kriteria);?>')"
     												href="#!" class="btn btn-danger">Hapus</a>
     											<a href="<?php echo site_url('kriteria/getsubkriteria/'.$item->id_kriteria);?>"
     												class="btn btn-primary">Sub Kriteria</a></td>
     									</tr>
     									<?php endforeach ; ?>
										</tbody>
     									
     								
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
     	function deleteConfirm(url) {
     		$('#btn-delete').attr('href', url);
     		$('#deleteModal').modal();
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
