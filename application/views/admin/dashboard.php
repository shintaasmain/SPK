   <!-- Main Content -->
   <div class="main-content">
        <section class="section">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-book"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Kriteria</h4>
                  </div>
                  <?php foreach ($jml_kriteria as $item) {?>  
                  <div class="card-body">
                  <?= $item->total_kriteria ?>
                  </div>
                  <?php }?>
                  <div class="card-footer float-right">
                  <a href="<?= base_url('kriteria') ?>" class="badge badge-primary">View</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fas fa-list"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Alternatif</h4>
                  </div>
                  <?php foreach ($jml_alternatif as $item) {?>  
                  <div class="card-body">
                  <?= $item->total_alternatif ?>
                  </div>
                  <?php }?>
                  <div class="card-footer float-right">
                  <a href="<?= base_url('alternatif') ?>" class="badge badge-warning">View</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Penilaian</h4>
                  </div>
                  <div class="card-body">
                    hasil keputusan
                  </div>
                  <div class="card-footer float-right">
                  <a href="<?= base_url('penilaian') ?>" class="badge badge-success">View</a>
                  </div>
                </div>
              </div>
            </div>             
          </div>
        </section>
      </div>