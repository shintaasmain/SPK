
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
                <form method="post" action="<?php echo site_url('alternatif/edit_alternatif/'.$detail_alternatif->id_detailalternatif);?>" >     
                  <input type="hidden" name="id_alternatif"  value="<?php echo $detail_alternatif->id_alternatif;?>">
                <div class="card">
                <div class="card">  
                <div class="card-header">
                    <h4>Form Edit Alternatif</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 cpl-form-label">Nama Alternatif</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" name="nama_alternatif" placeholder="Nama Alternatif" value="<?php echo $detail_alternatif->nama_alternatif?>" readonly>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-4 cpl-form-label">C1</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" name="C1"  value="<?php echo $detail_alternatif->C1;?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-4 cpl-form-label">C2</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" name="C2"  value="<?php echo $detail_alternatif->C2;?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-4 cpl-form-label">C3</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" name="C3"  value="<?php echo $detail_alternatif->C3;?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-4 cpl-form-label">C4</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" name="C4"  value="<?php echo $detail_alternatif->C4;?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-4 cpl-form-label">C5</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" name="C5"  value="<?php echo $detail_alternatif->C5;?>">
                      </div>
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
