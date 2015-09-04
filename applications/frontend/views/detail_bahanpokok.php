<?php
function week_of_today()
{
    $month     = date('m');
    $month     = str_pad($month,2,'0',STR_PAD_LEFT);
    $today     = date('Y-m-d');
    $minggu    = 0;
    $week_end  = 0;
    $last_date =  last_date_ofthe_month();

    for($i = 1; $i<=$last_date; $i++)
    {
        $i = str_pad($i,2,'0',STR_PAD_LEFT);
        $date =  date("Y-{$month}-{$i}");
        $day  =  date('D', strtotime($date));

        if($day == 'Sat')
        {
            $minggu = $minggu + 1;
        }
        if($date == $today)
        {
            $minggu = $minggu + 1;
            break;
        }
    }
    return $minggu;
}

function last_date_ofthe_month($month="", $year="")
{
    if(!$year)   $year   = date('Y');
    if(!$month)  $month  = date('m');
    $date = $year.'-'.$month.'-01';

    $next_month = strtotime('+ 1 month', strtotime($date));

    $last_date  = date("d", strtotime("-1 minutes",  $next_month));
    return $last_date;
}

function bulan($bulan)
{
Switch ($bulan){
    case 1 : $bulan="Januari";
        Break;
    case 2 : $bulan="Februari";
        Break;
    case 3 : $bulan="Maret";
        Break;
    case 4 : $bulan="April";
        Break;
    case 5 : $bulan="Mei";
        Break;
    case 6 : $bulan="Juni";
        Break;
    case 7 : $bulan="Juli";
        Break;
    case 8 : $bulan="Agustus";
        Break;
    case 9 : $bulan="September";
        Break;
    case 10 : $bulan="Oktober";
        Break;
    case 11 : $bulan="November";
        Break;
    case 12 : $bulan="Desember";
        Break;
    }
return $bulan;
}

$bln                =date("m");
$id_jenisbahanpokok = $this->uri->segment(3);







?>

<div class="content-header">
    <h1><?php echo $data_komoditas[0]->nama_jenis_bahan_pokok; ?></h1>
</div>

<div class="row">
    <div class="col-md-3">
        <img style="min-width:100%;" class="img-responsive img-thumbnail" src="<?php echo base_url('assets/uploads/'.$data_komoditas[0]->foto_jenis_bahan_pokok) ?>">
    </div>
    <div class="col-md-3">
    <?php
        echo "<pre>";
        echo "Harga Maximum Minggu ke-".week_of_today()." Rp ".$data_max->harga_max;
        echo "</pre>";
    ?>    
    </div>
    <div class="col-md-3">
    <?php
        echo "<pre>";
        echo "Harga Minimum Minggu ke-".week_of_today()." Rp ".$data_min->harga_min;
        echo "</pre>";
    ?>
    </div>
    <div class="col-md-3">
    <?php
        echo "<pre>";
        echo "Harga Rata Rata Minggu ke-".week_of_today()." Rp ".floor($data_avg->harga_avg);
        echo "</pre>";
    ?>        
    </div>
</div>

<div class="row">
    <div class="col-md-12">

        <?php
            $attributes = array('class' => 'form-inline');
            echo form_open('bahanpokok/cari_tanggal/'.$id_jenisbahanpokok, $attributes);
        ?>
          <div class="form-group">
            <label class="sr-only">Tanggal</label>
            <input name="tgl_awal" type="text" class="form-control" id="datepicker" placeholder="Tanggal Awal">
          </div>
          <div class="form-group">
            <label class="sr-only">Tanggal Akhir</label>
            <input name="tgl_akhir" type="text" class="form-control" id="datepicker1" placeholder="Tanggal Akhir">
          </div>
          
          <button type="submit" class="btn btn-default">Cari</button>
        </form>
    </div>
</div>
<br/>

<div id="grafik" style="width:100%; height:400px;"></div>

<br/>	
<?php

echo "<pre>";
print_r(week_of_today());
echo "</pre>";

echo "<pre>";
print_r($data_komoditas);
echo "</pre>";


echo "<pre>";
print_r($data_tanggal);
echo "</pre>";



?>
<script>
$(function () { 
    $('#grafik').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: 'GRAFIK HARGA <?php echo $data_komoditas[0]->nama_jenis_bahan_pokok; ?> BULAN <?php echo bulan($bln); ?>'
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
                $harga              = $this->Komoditas_model->get_detailhargapasar($id_jenisbahanpokok,$row_pasar->id_pasar);
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