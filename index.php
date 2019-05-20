<?php get_header(); ?>
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height ?>" width="<?php  echo get_custom_header()->width ?>" alt="">

  <main>
    <div class="container content-posts">
      <div class="row">
        <div class="col-12">
          <?php 
            if(have_posts()):
              while(have_posts()): the_post(); 
          ?>
          
          <?php get_template_part('template-parts/content'); ?>

          <?php 

              endwhile; 
            else:

          ?>
            <p>nao ha postagem</p>
        <?php endif; ?>
        </div>
      </div>
    </div>
  </main>
      
<?php get_footer(); ?>  
    
     
