<div class="card bg-dark text-white card-image">
  <h2 class="text-center"><?php the_title(); ?></h2>  
  <div class="col-lg-10 offset-lg-1">
  	<?php the_post_thumbnail('full', array('class' => 'card-img card-image-heigth'));  ?>
  </div>
  <p class="text-center">
  	Publicado: <?php echo get_the_date(); ?>, Autor: <?php the_author_posts_link(); ?>  	
  </p>
</div>