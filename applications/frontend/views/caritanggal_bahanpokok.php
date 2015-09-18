<?php
$bln                = date("m");
$bulan              = bulan($bln);
$id_jenisbahanpokok = $this->uri->segment(3);
?>

<div class="content-block">
    <div class="container cont-pad-t-sm">
        <div class="content-header">
            <h1><?php echo $data_komoditas[0]->nama_jenis_bahan_pokok; ?></h1>
        </div>
        <div class="row">
            <div class="col-md-3">
                <img style="min-width:100%;" class="img-responsive img-thumbnail" src="<?php echo base_url('assets/uploads/'.$data_komoditas[0]->foto_jenis_bahan_pokok) ?>">
            </div>
             <div class="col-md-3 text-center">
                <div class="panel panel-danger">
                  <div class="panel-heading">
                    <h3 class="panel-title">Harga Maksimum</h3>
                    <span>Bulan <?php echo $bulan; ?></span>
                  </div>
                  <div class="panel-body">
                    <span class="panel-harga"><?php echo buatrp($data_max->harga_max)."/".$data_max->satuan; ?></span>
                  </div>
                  <div class="panel-footer">
                    <?php echo $data_max->nama_pasar; ?>
                  </div>
                </div>
            </div>

            <div class="col-md-3 text-center">
                <div class="panel panel-success">
                  <div class="panel-heading">
                    <h3 class="panel-title">Harga Minimum</h3>
                    <span>Bulan <?php echo $bulan; ?></span>
                  </div>
                  <div class="panel-body">
                    <span class="panel-harga"><?php echo buatrp($data_min->harga_min)."/".$data_max->satuan; ?></span>
                  </div>
                  <div class="panel-footer">
                    <?php echo $data_min->nama_pasar; ?>
                  </div>
                </div>
            </div>

            <div class="col-md-3 text-center">
                <div class="panel panel-info">
                  <div class="panel-heading">
                    <h3 class="panel-title">Harga Rata Rata</h3>
                    <span>Bulan <?php echo $bulan; ?></span>
                  </div>
                  <div class="panel-body">
                    <span class="panel-harga"><?php echo buatrp($data_avg->harga_avg)."/".$data_max->satuan; ?></span>
                  </div>
                </div>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12">
            <!-- Form Panel -->
                <div class="form-panel">
                  <header><i class="fa fa-search"></i> Cari Data</header>
                  <fieldset>
                    <?php
                      echo form_open('bahanpokok/cari_tanggal/'.$id_jenisbahanpokok);
                    ?>
                      <div class="form-group">
                      <label>Dari</label>
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                          <input name="tgl_awal" id="datepicker" type="text" class="form-control" placeholder="Tanggal Awal" required>
                        </div>
                      </div>
                      <div class="form-group">
                      <label>Sampai</label>
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                          <input name="tgl_akhir" id="datepicker1" type="text" class="form-control" placeholder="Tanggal Akhir" required>
                        </div>
                      </div>
                      <button class="btn btn-primary btn-bigger btn-block">Cari</button>
                    </form>
                  </fieldset>
                  <div id="grafik" style="width:100%; height:400px;"></div>
                </div>
                <!-- /Form Panel -->
            </div>
        </div>
    </div>

<script>
$(function () { 
    $('#grafik').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: 'GRAFIK HARGA <?php echo $data_komoditas[0]->nama_jenis_bahan_pokok; ?> ANTARA TANGGAL <?php echo TanggalIndo($tgl_awal); ?> sampai <?php echo TanggalIndo($tgl_akhir); ?>'
        },
        xAxis: {
            categories: [<?php foreach($data_tanggal as $row_tanggal){ ?>'<?php echo $row_tanggal->tgl_update; ?>', <?php } ?>]
        },
        yAxis: {
            title: {
                text: 'Harga'
            }
        },
        series: 
        [
        <?php foreach($data_pasar as $row_pasar) { ?>

            {
                name: '<?php echo $row_pasar->nama_pasar; ?>',
                <?php 
                $harga              = $this->Komoditas_model->get_caritanggal($id_jenisbahanpokok,$row_pasar->id_pasar,$tgl_awal,$tgl_akhir);
                ?>
                data: [<?php foreach($harga as $row_harga) {echo $row_harga->harga.',';} ?>]
            }
            , 
        <?php } ?>
        ]
    });
});
</script>
<script>
jQuery('#datepicker').datetimepicker({
 lang:'id',
 timepicker:false,
 format:'Y-m-d'
});
</script>

<script>
jQuery('#datepicker1').datetimepicker({
 lang:'id',
 timepicker:false,
 format:'Y-m-d'
});
</script>