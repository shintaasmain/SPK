     <!-- Main Content -->
     <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Manajemen Alternatif</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Kriteria</a></div>
              <div class="breadcrumb-item">Main</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Data Alternatif</h2>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <a href="<?php echo site_url('alternatif/tambah');?>" class="btn btn-primary">
                    Tambah Alternatif</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>No</th>
                          <th>Alternatif</th>
                          <th>Action</th>
                        </tr>
                        <?php 
                        $no = 1;
                        foreach ($alternatif as $item): ?>
                          <tr>
                          <td><?php echo $no++;?></td>
                          <td><?php echo $item->nama_alternatif;?></td>
                        <td>
                        <a href="<?php echo site_url('alternatif/getalternatif/'.$item->id_alternatif);?>" class="btn btn-primary">Lihat</a>
                        <a href="<?php echo site_url('kriteria/getid/'.$item->id_kriteria);?>" class="btn btn-warning">Edit</a>
                        <a onclick="deleteConfirm('<?php echo site_url('kriteria/hapus/'.$item->id_kriteria);?>')" href="#!" class="btn btn-danger">Hapus</a></td>
                        </tr>
                        <?php endforeach ; ?>
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

