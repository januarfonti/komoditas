
              
              
              
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
                  <a href="blog-post.html" class="continue btn btn-primary">read more</a>
                </div>  
                </div>  
              </article>
              <!-- /Blog Entry -->
                    
                <?php }} ?>

              <?php echo $this->ajax_pagination->create_links(); ?>