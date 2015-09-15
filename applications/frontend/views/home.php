<?php
function buatrp($angka)
{
    $jadi = "Rp " . number_format($angka,0,',','.');
    return $jadi;
}
?>

        
        <!-- Intro Block
              ============================================-->
              <section class="intro-block intro-page boxed-section cover-1-bg overlay-dark-m">
              
                <!-- Container -->
                <div class="container">     
                  <!-- Section Title -->
                  <div class="section-title invert-colors no-margin-b">
                    <h2>harga rata rata komoditas</h2>
                    <p>Update terakhir tanggal <?php echo TanggalIndo($data_rataratahariini[0]->tgl_update); ?>, perbandingan dengan harga tanggal <?php echo TanggalIndo($data_ratarataharikemarin[0]->tgl_update); ?></p>
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
      
        <!-- Container -->
        <div class="container">

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
                            <img style="min-width:100%; min-height:100%;" class="lazy img-responsive" src="<?php echo base_url('assets/uploads/'.$val->foto_jenis_bahan_pokok) ?>">
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
      
      <!-- Content Block
      ============================================ -->
      <div class="content-block">
      
      </div>
      
       <!-- Content Block
      ============================================-->
      <section class="content-block default-bg">
      
        <!-- Container -->
        <div class="container cont-pad-t-sm">

          <!-- Row -->
          <div class="row">

            <!-- Main Col -->
            <div class="main-col col-sm-8 col-md-8 mgb-30-xs">
              
              <!-- Intro Block
              ============================================-->
              <section class="intro-block intro-page boxed-section cover-2-bg overlay-dark-m">
              
                <!-- Container -->
                <div class="container">     
                  <!-- Section Title -->
                  <div class="section-title invert-colors no-margin-b">
                    <h2>Berita</h2>
                    <p class="hidden-xs">Lihat Berita Terakhir Mengenai Perkembangan Komoditas</p>
                  </div>
                  <!-- /Section Title -->
                </div>

                <!-- /Container -->
              
              </section><br/>
              <!-- /Intro Block
              ============================================-->
              
              <?php
              if (isset($data_berita)){ foreach ($data_berita as $key) { ?>
              <!-- Blog Entry -->
              <article class="blog-entry">
                <div class="row">
                <div class="col-md-4">
                  <img class="lazy img img-responsive img-thumbnail" data-original="<?php echo base_url('assets/uploads/'.$key->gambar); ?>" alt="pic">
                </div>
                <div class="col-md-8">
                  <h4><a href="<?php echo base_url('berita/detail/'.$key->id_berita); ?>"><?php echo $key->judul_berita; ?></a></h4>
                  <div class="meta">
                    <span class="date"><i class="fa fa-calendar"></i><a href="#"><?php echo TanggalIndo($key->tgl_update); ?></a></span>
                    <span class="author"><i class="fa fa-user"></i><a href="#">By <?php echo $key->user; ?></a></span>
                  </div>
                  <p class="dcap dcap-square"><?php echo word_limiter($key->isi_berita, 50); ?></p>
                  <a href="blog-post.html" class="continue btn btn-primary">read more</a>
                </div>  
                </div>  
              </article>
              <!-- /Blog Entry -->
                    
                <?php }} ?>

              
              
              
            </div>
            <!-- /Main Col -->
            
            <!-- Side Col -->
            <div class="side-col side-col-padded col-sm-4 col-md-4">

            <!-- Side Widget -->
              <div class="side-widget">
              
                <img src="http://placehold.it/350x250">
                
              </div>
              <!-- /Side Widget -->

              <!-- Side Widget -->
              <div class="side-widget">
              
                <h5 class="boxed-title">page topics</h5>
                
                <ul class="ul-toggle">
                  <li><a href="#"><i class="icon fa fa-angle-right"></i>About our company</a><i class="toggler ti ti-plus"></i>
                    <ul>
                      <li><a href="#"><i class="icon fa fa-angle-right"></i>First Topic Link</a></li>
                      <li><a href="#"><i class="icon fa fa-angle-right"></i>Second Topic Link</a></li>
                      <li><a href="#"><i class="icon fa fa-angle-right"></i>Third Topic Link</a></li>
                    </ul>
                  </li>
                  <li><a href="#"><i class="icon fa fa-angle-right"></i>Our Mission & Vision</a><i class="toggler ti ti-plus"></i>
                    <ul>
                      <li><a href="#">First Topic Link</a></li>
                      <li><a href="#">Second Topic Link</a></li>
                      <li><a href="#">Third Topic Link</a></li>
                    </ul>
                  </li>
                  <li><a href="#"><i class="icon fa fa-angle-right"></i>Clients and case studies</a><i class="toggler ti ti-plus"></i>
                    <ul>
                      <li><a href="#">First Topic Link</a></li>
                      <li><a href="#">Second Topic Link</a></li>
                      <li><a href="#">Third Topic Link</a></li>
                    </ul>
                  </li>
                  <li><a href="#"><i class="icon fa fa-angle-right"></i>Our portfolio</a></li>
                  <li><a href="#"><i class="icon fa fa-angle-right"></i>Price Plans</a></li>
                </ul>
                
              </div>
              <!-- /Side Widget -->
              
            </div>
            <!-- /Side Col -->

          </div>
          <!-- /Row -->
        
        </div>
        <!-- /Container -->
        
      </section>
      <!-- /Content Block
      ============================================-->





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