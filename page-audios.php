<?php get_header(); ?>
<img class="img-fluid generate-template-img" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height ?>" width="<?php  echo get_custom_header()->width ?>" alt="">

  <main>
    <div class="container-fluid generate-template-container-fluid">
      <h3><?php the_title(); ?></h3>
    </div>
            
    <div class="container-fluid generate-template-container content-fotos">
    	<div class="card bg-white text-dark card-image-fotos">
       	<div class="row d-flex justify-content-around">        
            <?php 
              $fotos = new WP_Query('post_type=post&posts_per_page=10&category_name=audios');

              if($fotos->have_posts()):
                while($fotos->have_posts()): $fotos->the_post();
            ?>
            
              <?php  get_template_part('template-parts/content', 'audios'); ?>
            

            <?php
                endwhile;
                wp_reset_postdata();
              endif;
            ?>        
        </div>
      </div>
    </div>
  </main>
      
<?php get_footer(); ?>  
    
     
