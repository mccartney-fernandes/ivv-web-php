<div class="container mt-2">
	<div class="card bg-dark text-white card-image col-12 p-3">
	  <h2 class="text-center"><?php the_title(); ?></h2>
	  <p class="text-center">
	  	Publicado: <?php echo get_the_date(); ?>, Autor: <?php the_author_posts_link(); ?>, <?php the_tags('Tags: ', ', ') ?> 	
	  </p> 
	  <div class="col-lg-10 offset-lg-1">
	  	<?php the_content();?>
	  </div>	  
	</div>
</div>