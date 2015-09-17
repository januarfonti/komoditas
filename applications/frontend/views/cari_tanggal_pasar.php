<?php

$id_pasar = $this->uri->segment(3);
function buatrp($angka)
{
    $jadi = "Rp " . number_format($angka,0,',','.');
    return $jadi;
}
?>



    <!-- Main Col -->
            <div class="container">
              <!-- Blog Entry -->
              <article class="blog-entry">
                <div class="row">
                <div class="col-md-12">
                <div>
                <img style="margin-right:30px;" class="postImg pull-left img-responsive img-thumbnail" src="<?php echo base_url("assets/uploads/".$data_rataratahariini[0]->foto_pasar); ?>" alt="pic">
                    <h3><?php echo $data_rataratahariini[0]->nama_pasar; ?></h3>
                    <p style="margin-bottom:-1px;"><b>Alamat : </b> <?php echo $data_rataratahariini[0]->alamat_pasar; ?></p>
                    <?php echo $data_rataratahariini[0]->biografi_pasar; ?>
                </div>  
                </div>  
              </article>
              <!-- /Blog Entry -->
                    
              
            </div>
            <!-- /Main Col -->


      <!-- Intro Block
      ============================================ -->
      <div class="intro-block mgb-20">
      
        <!-- Container -->
        <div class="container">
            <center><h4>Perbandingan harga komoditas antara tanggal <?php echo TanggalIndo($data_rataratahariini[0]->tgl_update); ?> dan <?php echo TanggalIndo($data_ratarataharikemarin[0]->tgl_update); ?> </h4></center>
          <!-- Slider Wrapper -->
          <div class="intro-slider">
          
            <!-- OWL SLIDER -->

            <div class="owl-carousel applications-list owl-theme owl-loaded">
                <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(-970px, 0px, 0px); transition: 0s; width: 3492px;">
                <?php
                foreach($data_rataratahariini as $key => $val)
                {
                    $val2 = $data_ratarataharikemarin[$key];
                    if ($val->harga_ratarata > $val2->harga_ratarata)
                    {
                        $selisih = $val->harga_ratarata - $val2->harga_ratarata;
                        $status  = "Harga Naik";
                        $style   = "warna-naik";
                        $icon = "<i class='fa fa-chevron-up'></i> ";
                        
                    }
                    elseif ($val->harga_ratarata < $val2->harga_ratarata) {
                        
                        $selisih = $val2->harga_ratarata - $val->harga_ratarata;
                        $status = "Harga Turun ";
                        $style   = "warna-turun";
                        $icon = "<i class='fa fa-chevron-down'></i> ";
                        

                    }
                    elseif ($val->harga_ratarata = $val2->harga_ratarata) {
                        $status = "Harga Stabil";
                        $style   = "warna-stabil";
                        $icon = "= ";
                        
                    }
                ?>
                    <div class="item">
                        <a href="<?php echo base_url('bahanpokok/detail/'.$val->id_jenisbahanpokok); ?>">
                            <span class="sp-nama <?php echo $style; ?>"><?php echo $val->nama_jenis_bahan_pokok; ?></span>
                            <img style="min-width:100%; min-height:100%;" class="img-responsive" src="<?php echo base_url('assets/uploads/'.$val->foto_jenis_bahan_pokok) ?>">
                            <span class="sp-harga <?php echo $style; ?>"><?php echo buatrp($val->harga_ratarata)."/".$val->satuan; ?></span>
                            <span class="sp-selisih <?php echo $style; ?>"><?php echo $icon."".$status." ".buatrp($selisih) ?></b></span>
                        </a>
                    </div>
                    
                    
                    
                <?php
                }
                ?>
               
               
                </div>
                </div>
            </div>

            <!-- /OWL SLIDER -->
            
          </div>
          <!-- Slider Wrapper -->

        </div>
        <!-- /Container -->
      
      </div>
      <!-- /Intro Block
      ============================================ -->
      
      <div class="container">

      <!-- Form Panel -->
	    <div class="form-panel">
	      <header><i class="fa fa-search"></i> Cari Data</header>
	      <fieldset>
	        <?php
          	  echo form_open('pasar/cari_tanggal/'.$id_pasar);
        	?>
	          <div class="form-group">
	          <label>Dari</label>
	            <div class="input-group">
	              <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
	              <input name="tgl_awal" id="datepicker" type="text" class="form-control" placeholder="Tanggal Awal">
	            </div>
	          </div>
	          <div class="form-group">
	          <label>Sampai</label>
	            <div class="input-group">
	              <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
	              <input name="tgl_akhir" id="datepicker1" type="text" class="form-control" placeholder="Tanggal Akhir">
	            </div>
	          </div>
	          <button class="btn btn-primary btn-bigger btn-block">Cari</button>
	        </form>
	      </fieldset>
	      <div id="grafik" style="width:100%; height:400px;"></div>
	    </div>
	    <!-- /Form Panel -->
	</div>

      

      <div class="container">
      		
      </div>

      


<script>
$(function () { 
    $('#grafik').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: 'GRAFIK HARGA ANTARA TANGGAL <?php echo TanggalIndo($tgl_awal); ?> sampai <?php echo TanggalIndo($tgl_akhir); ?>'
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
        <?php foreach($data_komoditas as $row_komoditas) { ?>

            {
                name: '<?php echo $row_komoditas->nama_jenis_bahan_pokok; ?>',
                <?php 
                $harga              = $this->Komoditas_model->get_caridetailhargapasar1($id_pasar,$row_komoditas->id_jenisbahanpokok,$tgl_awal,$tgl_akhir);
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


<script>
       /**
/* START add to scripts.js
/**/
$(function () {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        slideBy: 'page',
        owl2row: 'true', // enable plugin
        owl2rowTarget: 'item', // class for items in carousel div
        owl2rowContainer: 'owl2row-item', // class for items container
        owl2rowDirection: 'utd', // ltr : directions
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
});

/**
/* END add to scripts.js
/**/

/**
/* START Save as owl.carousel.2row.js
/**/

/**
 * Owl2row
 * @since 2.0.0
 */
;
(function ($, window, document, undefined) {
    Owl2row = function (scope) {
        this.owl = scope;
        this.owl.options = $.extend(Owl2row.Defaults, this.owl.options);
        //link callback events with owl carousel here

        this.handlers = {
            'initialize.owl.carousel': $.proxy(function (e) {
                if (this.owl.settings.owl2row) {
                    this.build2row(this);
                }
            }, this)
        };

        this.owl.$element.on(this.handlers);
    };

    Owl2row.Defaults = {
        owl2row: 'true',
        owl2rowTarget: 'item',
        owl2rowContainer: 'owl2row-item',
        owl2rowDirection: 'utd' // ltr
    };

    //mehtods:
    Owl2row.prototype.build2row = function (thisScope) {

        var carousel = $('.' + thisScope.owl.options.baseClass);
        var carouselItems = carousel.find('.' + thisScope.owl.options.owl2rowTarget);

        var aEvenElements = [];
        var aOddElements = [];

        $.each(carouselItems, function (index, item) {
            if (index % 2 === 0) {
                aEvenElements.push(item);
            } else {
                aOddElements.push(item);
            }
        });

        carousel.empty();

        switch (thisScope.owl.options.owl2rowDirection) {
            case 'ltr':
                thisScope.leftToright(thisScope, carousel, carouselItems);
                break;

            default:
                thisScope.upTodown(thisScope, aEvenElements, aOddElements, carousel);
        }

    };

    Owl2row.prototype.leftToright = function (thisScope, carousel, carouselItems) {

        var o2wContainerClass = thisScope.owl.options.owl2rowContainer;
        var owlMargin = thisScope.owl.options.margin;

        var carouselItemsLength = carouselItems.length;

        var firsArr = [];
        var secondArr = [];

        //console.log(carouselItemsLength);

        if (carouselItemsLength % 2 === 1) {
            carouselItemsLength = ((carouselItemsLength - 1) / 2) + 1;
        } else {
            carouselItemsLength = carouselItemsLength / 2;
        }

        //console.log(carouselItemsLength);

        $.each(carouselItems, function (index, item) {


            if (index < carouselItemsLength) {
                firsArr.push(item);
            } else {
                secondArr.push(item);
            }
        });

        $.each(firsArr, function (index, item) {
            var rowContainer = $('<div class="' + o2wContainerClass + '"/>');

            var firstRowElement = firsArr[index];
            firstRowElement.style.marginBottom = owlMargin + 'px';

            rowContainer.append(firstRowElement)
                .append(secondArr[index]);

            carousel.append(rowContainer);
        });

    };

    Owl2row.prototype.upTodown = function (thisScope, aEvenElements, aOddElements, carousel) {

        var o2wContainerClass = thisScope.owl.options.owl2rowContainer;
        var owlMargin = thisScope.owl.options.margin;

        $.each(aEvenElements, function (index, item) {

            var rowContainer = $('<div class="' + o2wContainerClass + '"/>');
            var evenElement = aEvenElements[index];

            evenElement.style.marginBottom = owlMargin + 'px';

            rowContainer.append(evenElement)
                .append(aOddElements[index]);

            carousel.append(rowContainer);
        });
    };

    /**
     * Destroys the plugin.
     */
    Owl2row.prototype.destroy = function () {
        var handler, property;

        for (handler in this.handlers) {
            this.owl.dom.$el.off(handler, this.handlers[handler]);
        }
        for (property in Object.getOwnPropertyNames(this)) {
            typeof this[property] !== 'function' && (this[property] = null);
        }
    };

    $.fn.owlCarousel.Constructor.Plugins['owl2row'] = Owl2row;
})(window.Zepto || window.jQuery, window, document);

/**
/* END Save as owl.carousel.2row.js
/**/
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