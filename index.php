<?php get_header(); ?>
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height ?>" width="<?php  echo get_custom_header()->width ?>" alt="">

  <main>
    <div class="container content-posts">
      <div class="row">
          <?php 
            if(have_posts()):
              while(have_posts()): the_post(); 
          ?>
          
          <?php get_template_part('template-parts/content', get_post_format()); ?>

          <?php 

              endwhile;

              the_posts_pagination(
                array(
                  'prev_text' => 'Previous',
                  'next_text' => 'Next',
                  'screen_reader_text' => ''
                )
              );
            else:

          ?>
            <p>nao ha postagem</p>
        <?php endif; ?>
      </div>
    </div>
  </main>
      
<?php get_footer(); ?>  
    
     
