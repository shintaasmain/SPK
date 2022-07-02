
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
                <form method="post" action="<?php echo site_url('kriteria/edit_subkriteria/'.$subkriteria->id_kriteria);?>" >     
                  <input type="hidden" name="id_subkriteria"  value="<?php echo $subkriteria->id_subkriteria;?>">
                <div class="card">
                <div class="card">  
                <div class="card-header">
                    <h4>Form Edit Sub Kriteria</h4>
                  </div>
                  <div class="card-body">
                      <label for="inputEmail3" class="col-sm-4 cpl-form-label">Nama Sub Kriteria</label>
                      <div class="col-sm-9 mb-4">
                        <input type="text" class="form-control" id="inputEmail3" name="nama_subkriteria" placeholder="Nama Sub Kriteria" value="<?php echo $subkriteria->nama_subkriteria;?>">
                      </div>
                      <label for="inputEmail3" class="col-sm-3 cpl-form-label">Bobot</label>
                      <div class="col-sm-9 mb-4">
                        <input type="text" class="form-control" id="inputEmail3" name="bobot" placeholder="Bobot" value="<?php echo $subkriteria->bobot;?>">
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
