<!-- Content Block
      ============================================-->
      <section class="content-block default-bg">
      
        <!-- Container -->
        <div class="container cont-pad-t-sm">

          <!-- Row -->
          <div class="row">

          <!-- Intro Block
              ============================================-->
              <section style="margin-top:-30px;" class="intro-block intro-page boxed-section cover-2-bg overlay-dark-m">
              
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
              
              </section>
              <!-- /Intro Block
              ============================================-->
              <hr/>
            <!-- Main Col -->
            <div class="main-col col-sm-8 col-md-8 mgb-30-xs" id="postList">
              
              
              
              <?php
              if (isset($data_berita)){ foreach ($data_berita as $key) { ?>
              <!-- Blog Entry -->
              <article class="blog-entry">
                <div class="row">
                <div class="col-md-4">
                  <img class="img img-responsive img-thumbnail" src="<?php echo base_url('assets/uploads/'.$key->gambar); ?>" alt="pic">
                </div>
                <div class="col-md-8">
                  <h4><a href="<?php echo base_url('berita/detail/'.$key->id_berita); ?>"><?php echo $key->judul_berita; ?></a></h4>
                  <div class="meta">
                    <span class="date"><i class="fa fa-calendar"></i><a href="#"><?php echo TanggalIndo($key->tgl_update); ?></a></span>
                    <span class="author"><i class="fa fa-user"></i><a href="#">By <?php echo $key->user; ?></a></span>
                  </div>
                  <p class="dcap dcap-square"><?php echo word_limiter($key->isi_berita, 50); ?></p>
                  <a href="<?php echo base_url('berita/detail/'.$key->id_berita); ?>" class="continue btn btn-primary">Selanjutnya</a>
                </div>  
                </div>  
              </article>
              <!-- /Blog Entry -->
                    
                <?php }} ?>

              <?php echo $this->ajax_pagination->create_links(); ?>
              
              
            </div>
            <!-- /Main Col -->
            
          <?php $this->load->view('sidebar'); ?> 

          </div>
          <!-- /Row -->
        
        </div>
        <!-- /Container -->
        
      </section>
      <!-- /Content Block
      ============================================-->