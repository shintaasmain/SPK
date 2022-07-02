
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
                <form method="post" action="<?php echo site_url('alternatif/simpan');?>" >              
                <div class="card">
                <div class="card">  
                <div class="card-header">
                    <h4>Form Tambah Alternatif</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row" >
                    <label for="inputEmail3" class="col-sm-4 cpl-form-label">Nama Alternatif</label>
                      <div class="col-sm-9 mb-4">
                        <input type="text" class="form-control" id="inputEmail3" name="nama_alternatif" placeholder="">
                      </div>
                      <div class="col-sm-9">
                        <ul class="navbar-nav">
                          <?php foreach ($kriteria as $k):?>
                            <li class="nav-item">
                              <h href="#" class="nav-link"><span><?= $k->nama_kriteria ?></span></h>
                              <input type="text" class="form-control" id="inputEmail3" name="nama_alternatif" placeholder="">
                            <?php endforeach; ?>
                        </li>
                        </ul>
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
