<div class="card bg-dark text-white card-image card-gallery card-posts-text">
  <h2 class="text-center"><?php the_title(); ?></h2>  
  <?php the_content(); ?>
  <p class="text-center">
  	Publicado: <?php echo get_the_date(); ?>, Autor: <?php the_author_posts_link(); ?> 
  </p>
</div>