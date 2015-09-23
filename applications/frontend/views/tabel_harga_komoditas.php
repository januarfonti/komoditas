        <!-- Intro Block
              ============================================-->
              <section class="intro-block intro-page boxed-section cover-3-bg overlay-dark-m">
              
                <!-- Container -->
                <div class="container">     
                  <!-- Section Title -->
                  <div class="section-title invert-colors no-margin-b">
                    <?php
                      if ($this->uri->segment(2) === FALSE)
                      {
                          echo "<h2>Harga Rata - Rata Semua Pasar  Tanggal ".TanggalIndo($data_rataratahariini[0]->tgl_update)."</h2>";
                      }
                      elseif ($this->uri->segment(2) == 'cari')
                      {
                             echo "<h2>Harga Komoditas di ".$nama_pasar->nama_pasar."  Tanggal ".TanggalIndo($tgl_awal)."</h2>";
                      }
                    ?>
                  </div>
                  <!-- /Section Title -->
                </div>

                <!-- /Container -->
              
              </section><br/>
              <!-- /Intro Block
              ============================================-->

      <!-- Intro Block
      ============================================ -->
      <div class="intro-block mgb-20">
          <div class="container">
          <div class="pull-right" >
          <?php $attr = array('class' => 'form-inline'); echo form_open('tabel_harga_komoditas/cari',$attr); ?>
            <div class="form-group">
              <label>Tanggal</label>
              
              <div class="input-group">
                <input type="text" class="form-control" id="tanggal" name="tgl_awal" required>
                <div class="input-group-addon"><i class="fa fa-calendar"></i></div> 
              </div>

              
            </div>
            <div class="form-group">
              <label>Pasar</label>
              <select class="form-control" name="id_pasar">
              <?php if (isset($data_pasar)) { foreach ($data_pasar as $key) { ?>
                <option value="<?php echo $key->id_pasar; ?>"><?php echo $key->nama_pasar; ?></option>
              <?php }} ?>
              </select>
            </div>
            <button type="submit" class="btn btn-success">Tampilkan</button>
            
          </form>
          <br/>
          <?php echo form_close(); ?>
          </div>
          
          
              <table class="table table-striped table-bordered" id="tabel-harga">
                  <thead>
                    <tr class="info">
                      <th class="text-center">No</th>
                      <th class="text-center">Nama Bahan Pokok</th>
                      <th class="text-center"></th>
                      <th class="text-center">Satuan</th>
                      <th class="text-center">Harga Kemarin</th>
                      <th class="text-center">Harga Sekarang</th>
                      <th class="text-center">Perubahan (Rp)</th>
                      <th class="text-center">Perubahan (%)</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                $no = 1;
                $bahanAwal = "";
                foreach($data_rataratahariini as $key => $val)
                {
                    $bahanAkhir = $val->nama_bahan_pokok;
                    if( empty( $data_ratarataharikemarin ) )
                    {
                         $val2    = array('harga_ratarata' => '0');
                         $selisih = 0;
                         $persen  = 0;
                         $style   = "warna-stabil";
                    }
                    else
                    {
                        $val2 = $data_ratarataharikemarin[$key];
                        if ($val->harga_ratarata > $val2->harga_ratarata)
                        {
                            $selisih = $val->harga_ratarata - $val2->harga_ratarata;
                            $persen  =  $selisih / $val->harga_ratarata * 100;
                            $status  = "Harga Naik";
                            $style   = "warna-naik";
                            $icon    = "<i class='fa fa-chevron-up'></i> ";
                            
                        }
                        elseif ($val->harga_ratarata < $val2->harga_ratarata) {
                            
                            $selisih = $val2->harga_ratarata - $val->harga_ratarata;
                            $persen  =  $selisih / $val2->harga_ratarata * 100;
                            $status  = "Harga Turun ";
                            $style   = "warna-turun";
                            $icon    = "<i class='fa fa-chevron-down'></i> ";
                            

                        }
                        elseif ($val->harga_ratarata = $val2->harga_ratarata) {
                            $selisih = 0;
                            $persen  = 0;
                            $status  = "Harga Stabil";
                            $style   = "warna-stabil";
                            $icon    = "= ";
                            
                        }
                    }
                ?>
                    <tr>
                      <th scope="row"><?php echo $no; ?></th>
                      <td><?php if ($bahanAkhir == $bahanAwal){echo '';}else{echo $val->nama_bahan_pokok;$bahanAwal=$val->nama_bahan_pokok;} ?></td>
                      <td><?php echo $val->nama_jenis_bahan_pokok; ?></td>
                      <td><?php echo $val->satuan; ?></td>
                      <td class="text-right"><?php if (isset($val2->harga_ratarata))
                                                      { 
                                                        echo buatrp($val2->harga_ratarata); 
                                                      }
                                                      ?></td>
                      <td class="text-right"><?php echo buatrp($val->harga_ratarata); ?></td>
                      <td class="text-right <?php echo $style; ?>" style="color:#fff; !important"><?php echo buatrp($selisih); ?></td>
                      <td class="text-right"><?php echo round($persen); ?> %</td>
                    </tr>
                   <?php $no++; } ?>
                  </tbody>
                </table>
          </div>
      </div>
      <!-- /Intro Block
      ============================================ -->
      
    






<script>
jQuery('#tanggal').datetimepicker({
 lang:'id',
 timepicker:false,
 format:'Y-m-d'
});
</script>
<script>
$('#tabel-harga').DataTable( {
    dom: 'Bfrtip',
    "bFilter": false,
    "iDisplayLength": 15,
    buttons: [
        'copy', 'excel', 'pdf'
    ]
} );
</script>