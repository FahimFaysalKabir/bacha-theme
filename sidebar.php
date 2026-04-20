 <div class="sidebar-box ftco-animate">
            	<h3>Category</h3>
              <ul class="categories">
                 
                <?php 

                $notice = new WP_Query(array(

                   'post_type' => 'notice'
                ));
                while($notice->have_posts()):$notice->the_post();?>
                <li><a href="#"><?php the_title();?></a></li>
                <?php endwhile;?>
              </ul>
            </div>