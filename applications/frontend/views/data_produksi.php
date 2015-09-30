

<div class="content-block">
    <div class="container cont-pad-t-sm">
    	<div class="panel panel-default">
		  <div class="panel-body">
		    
		  		    	<?php $attr = array('class' => 'form-inline'); echo form_open('data_produksi',$attr); ?>
            
            <div class="form-group">
              <label>Pasar</label>
              <select class="form-control" name="bulan">
              	<option value="Januari">Januari</option>
              	<option value="Februari">Februari</option>
              	<option value="Maret">Maret</option>
              	<option value="April">April</option>
              	<option value="Mei">Mei</option>
              	<option value="Juni">Juni</option>
              	<option value="Juli">Juli</option>
              	<option value="Agustus">Agustus</option>
              	<option value="September">September</option>
              	<option value="Oktober">Oktober</option>
              	<option value="November">November</option>
              	<option value="Desember">Desember</option>
              </select>
            </div>

            <div class="form-group">
              <label>Tahun</label>
              <select class="form-control" name="tahun">
              	<option value="2015">2015</option>
              	<option value="2016">2016</option>
              	<option value="2017">2017</option>
              	<option value="2018">2018</option>
              	<option value="2019">2019</option>
              	<option value="2020">2020</option>
              	<option value="2021">2021</option>
              	<option value="2022">2022</option>
              </select>
            </div>
            <button type="submit" class="btn btn-success">Tampilkan</button>
            
          </form>
          
          <?php echo form_close(); ?>

		  </div>
		</div>



    <div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#dataproduksi" aria-controls="dataproduksi" role="tab" data-toggle="tab">Data Produksi</a></li>
    <li role="presentation"><a href="#luaslahan" aria-controls="luaslahan" role="tab" data-toggle="tab">Data Luas Lahan Produksi</a></li>
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">


    <div role="tabpanel" class="tab-pane active" id="dataproduksi">
    	
    	<table id="data_produksi" class="table table-bordered table-hovered table-striped" cellspacing="0" cellpadding="0">
    	<thead>
			  <tr>
			    <td width="20%" rowspan="3" class="text-center info">KELURAHAN</td>
			    <td colspan="5"class="text-center success">
			 		Tabel Data Produksi Bulan <?php echo $bulan." ".$tahun; ?> (Satuan TON)
			    </td>
			  </tr>
			  <tr class="warning">
			  	    <td align="center">PRODUKSI</td>
			        <td align="center">PRODUKSI</td>
			        <td align="center">PRODUKSI</td>
			        <td align="center">PRODUKSI</td>
			        <td align="center">PRODUKSI</td>
			        </tr>
			  <tr class="warning">
			        <td colspan="1" align="center" >Padi</td>
			        <td colspan="1" align="center" >Bawang Putih</td>
			        <td colspan="1" align="center" >Jagung</td>
			        <td colspan="1" align="center" >Kedelai</td>
			        <td colspan="1" align="center" >Bawang Merah</td>
			        </tr>
			  
			    </thead>
			    <tbody>
			    	<?php if (isset($data_produksi)) { foreach ($data_produksi as $row) { ?>
			    	<tr>
				    	<td><?php echo $row->nama_kecamatan; ?></td>
				        <td><?php echo $row->produksi_padi; ?></td>
				        <td><?php echo $row->produksi_bawang_putih; ?></td>
				        <td><?php echo $row->produksi_jagung; ?></td>
				        <td><?php echo $row->produksi_kedelai; ?></td>
				        <td><?php echo $row->produksi_bawang_merah; ?></td>
			        </tr>
			        <?php } } ?>
			 </tbody>
			  
			</table>
    </div>
    <div role="tabpanel" class="tab-pane" id="luaslahan">
    	
    	<table id="luas_lahan" class="table table-bordered table-hovered table-striped" cellspacing="0" cellpadding="0">
    	<thead>
			  <tr>
			    <td width="20%" rowspan="3" class="text-center info">KELURAHAN</td>
			    <td colspan="5"class="text-center success">
			 		Tabel Luas Lahan Bulan <?php echo $bulan." ".$tahun; ?> (HEKTAR)
			    </td>
			  </tr>
			  <tr class="warning">
			  	    <td align="center">LUAS</td>
			        <td align="center">LUAS</td>
			        <td align="center">LUAS</td>
			        <td align="center">LUAS</td>
			        <td align="center">LUAS</td>
			        </tr>
			  <tr class="success">
			        <td colspan="1" align="center" >Padi</td>
			        <td colspan="1" align="center" >Bawang Putih</td>
			        <td colspan="1" align="center" >Jagung</td>
			        <td colspan="1" align="center" >Kedelai</td>
			        <td colspan="1" align="center" >Bawang Merah</td>
			        </tr>
			  

			        </thead>
			        <tbody>
			    	<?php if (isset($data_luaslahan)) { foreach ($data_luaslahan as $row) { ?>
			    	<tr>
				    	<td><?php echo $row->nama_kecamatan; ?></td>
				        <td><?php echo $row->luas_lahan_padi; ?></td>
				        <td><?php echo $row->luas_lahan_bawang_putih; ?></td>
				        <td><?php echo $row->luas_lahan_jagung; ?></td>
				        <td><?php echo $row->luas_lahan_kedelai; ?></td>
				        <td><?php echo $row->luas_lahan_bawang_merah; ?></td>
			        </tr>
			        <?php } } ?>
			 
			  </tbody>
			</table>

    </div>
  </div>

</div>

        

    </div>
</div>

<script>
$('#data_produksi').DataTable( {
    dom: 'Bfrtip',
    "bFilter": false,
    "iDisplayLength": 15,
    buttons: [
        'copy', 'excel', 'pdf'
    ]
} );
</script>

<script>
$('#luas_lahan').DataTable( {
    dom: 'Bfrtip',
    "bFilter": false,
    "iDisplayLength": 15,
    buttons: [
        'copy', 'excel', 'pdf'
    ]
} );
</script>