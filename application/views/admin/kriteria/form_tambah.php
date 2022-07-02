
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Kriteria</a></div>
              <div class="breadcrumb-item">Tambah</div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title">Form</h2>
            <div class="row">

              <div class="col-12 col-md-6">
                <form method="post" action="<?php echo site_url('kriteria/simpan');?>" >              
                <div class="card">
                <div class="card">  
                <div class="card-header">
                    <h4>Form Tambah Kriteria</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row" >
                    <label for="inputEmail3" class="col-sm-3 cpl-form-label">Kode Kriteria</label>
                      <div class="col-sm-9 mb-4">
                        <input type="text" class="form-control" id="inputEmail3" name="kode_kriteria" placeholder="">
                        <?php echo form_error('kode_kriteria','<small style="color:#FD0707">','</small>'); ?>
                      </div>
                    <label for="inputEmail3" class="col-sm-3 cpl-form-label">Nama Kriteria</label>
                      <div class="col-sm-9 mb-4">
                        <input type="text" class="form-control" id="inputEmail3" name="nama_kriteria" placeholder="">
                        <?php echo form_error('nama_kriteria','<small style="color:#FD0707">','</small>'); ?>
                      </div>
                      <label for="inputEmail3" class="col-sm-3 cpl-form-label">Bobot</label>
                      <div class="col-sm-9 mb-4">
                        <input type="text" class="form-control" id="inputEmail3" name="bobot" placeholder="">
                        <?php echo form_error('bobot','<small style="color:#FD0707">','</small>'); ?>
                      </div>
                      <label class="col-sm-3">Jenis</label>
                      <div class="col-sm-9">
                        <select class="form-control mb-3" name="jenis">
                          <option>Pilih...</option>
                          <option value="cost">Cost</option>
                        <option value="benefit">Benefit</option>
                        </select> 
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
