
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
                   <div class="form-group">
                    <label>Kriteria</label>
                    <select class="form-control" name="id_kriteria" id="id_kriteria" required>
                        <option value="">No Selected</option>
                        <?php foreach($kriteria as $row):?>
                        <option value="<?= $row->id_kriteria;?>"><?= $row->nama_kriteria;?></option>
                        <?php endforeach;?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Sub Kriteria</label>
                    <select class="form-control" id="id_subkriteria" name="id_subkriteria" required>
                        <option>No Selected</option>
                     </select>
                  </div>
            </form>
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

      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
 
            $('#id_kriteria').change(function(){ 
                var id=$(this).val();
                //console.log(id);
                $.ajax({
                    url : "<?= site_url('alternatif/kriteria')?>",
                    method : "POST",
                    data : {
                      id: id
                    },
                    //async : true,
                    dataType : 'JSON',
                    success: function(data){
                      console.log(data);
                         
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].id_subkriteria +'>'+data[i].nama_subkriteria+'</option>';
                        }
                        $('#id_subkriteria').html(html);
                        //$('#id_subkriteria').show();
 
                    }
                });
              return false;
            }); 
             
        });
    </script>