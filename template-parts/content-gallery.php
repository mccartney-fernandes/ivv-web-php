<div class="card text-dark card-image card-gallery card-posts-text">
  <h2 class="text-center"><?php the_title(); ?></h2>
  <p class="text-center">
  	Publicado: <?php echo get_the_date(); ?> 
  </p>
  <?php the_content(); ?>
  
</div>