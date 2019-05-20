<?php get_header(); ?>

  <main>
    <div class="container-fluid">      
          <?php 
            if(have_posts()):
              while(have_posts()): the_post(); 
          ?>
            <?php the_content(); ?>
          <?php 

              endwhile; 
            else:

          ?>
            <p>nao ha postagem</p>
        <?php endif; ?>
    </div>
  </main>
      
<?php get_footer(); ?>  
    
     
