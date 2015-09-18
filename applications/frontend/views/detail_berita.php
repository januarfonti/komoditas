 <!-- Content Block
      ============================================-->
      <section class="content-block default-bg">
      
        <!-- Container -->
        <div class="container cont-pad-t-sm">

          <!-- Row -->
          <div class="row">
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

            <!-- Main Col -->
            <div class="main-col col-sm-8 col-md-8 mgb-30-xs">
              
              
              
              
              <!-- Blog Entry -->
              <article class="blog-entry">
                <div class="row">
                <div class="col-md-12">
                <div>
                <img style="margin-right:30px;" class="postImg pull-left img-responsive img-thumbnail" src="<?php echo base_url('assets/uploads/'.$data_berita->gambar); ?>" alt="pic">

                  <h4><a href="<?php echo base_url('berita/detail/'.$data_berita->id_berita); ?>"><?php echo $data_berita->judul_berita; ?></a></h4>
                  <div style="margin-left:40px;" class="meta">
                    <span class="date"><i class="fa fa-calendar"></i><a href="#"><?php echo TanggalIndo($data_berita->tgl_update); ?></a></span>
                    <span class="author"><i class="fa fa-user"></i><a href="#">By <?php echo $data_berita->user; ?></a></span>
                  </div>
                  <p class="justify"><?php echo $data_berita->isi_berita; ?></p>
                </div>  
                </div>  
              </article>
              <!-- /Blog Entry -->
                    
                

              
              
              
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