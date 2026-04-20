   <?php get_header();?>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo get_template_directory_uri();?>/images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Our Blog</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">

          <?php while(have_posts()):the_post();?>

          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
               <?php $thumb = get_the_post_thumbnail_url(); ?>
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('<?php echo $thumb;?>');">
							
              </a>
              <div class="text bg-white p-4">
                
                <p><?php the_content();?></p>
                <div class="d-flex align-items-center mt-4">
	               </p>
	               
                </div>
              </div>
            </div>
          </div>

        <?php endwhile;?>
          
        
     
        </div>
        
			</div>
		</section>

		<?php get_footer();?>