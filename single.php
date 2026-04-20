    <?php get_header(); ?>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo get_template_directory_uri();?>/images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Blog Single</h1>
             <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="index.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            <?php while(have_posts()):the_post();?>
           
            <?php the_post_thumbnail();?>
            </p>
            <?php the_content(); ?>
            <?php comments_template();?>
          
            
          


  
              <?php endwhile;?>
          </div> <!-- .col-md-8 -->

          <div class="col-lg-4 sidebar ftco-animate">
            
          </div><!-- END COL -->
        </div>
      </div>
    </section>

    
    <?php get_footer();?>