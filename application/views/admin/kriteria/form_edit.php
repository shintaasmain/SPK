
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
              <div class="breadcrumb-item">Form</div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title">Forms</h2>
            <div class="row">

              <div class="col-12 col-md-6 col-lg-6">
                <form method="post" action="<?php echo site_url('kriteria/edit');?>" >              <div class="card">
                <input type="hidden" name="id_kriteria"  value="<?php echo $kriteria->id_kriteria;?>">
                <div class="card">  
                <div class="card-header">
                    <h4>Form Edit Kriteria</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 cpl-form-label">Kode Kriteria</label>
                      <div class="col-sm-9 mb-4">
                        <input type="text" class="form-control" id="inputEmail3" name="kode_kriteria" placeholder="Kode Kriteria" value="<?php echo $kriteria->kode_kriteria;?>">
                      </div>
                      <label for="inputEmail3" class="col-sm-3 cpl-form-label">Nama Kriteria</label>
                      <div class="col-sm-9 mb-4">
                        <input type="text" class="form-control" id="inputEmail3" name="nama_kriteria" placeholder="Nama Kriteria" value="<?php echo $kriteria->nama_kriteria;?>">
                      </div>
                      <label for="inputEmail3" class="col-sm-3 cpl-form-label">Bobot</label>
                      <div class="col-sm-9 mb-4">
                        <input type="text" class="form-control" id="inputEmail3" name="bobot" placeholder="Bobot" value="<?php echo $kriteria->bobot;?>">
                      </div>
                      <label for="inputEmail3" class="col-sm-3 cpl-form-label">Jenis</label>
                      <div class="col-sm-9 mb-4">
                        <input type="text" class="form-control" id="inputEmail3" name="jenis" placeholder="Nama Kriteria" value="<?php echo $kriteria->jenis;?>">
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
