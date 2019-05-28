<article id="post-<?php the_ID(); ?>" <?php post_class(array('class' => 'single-posts')) ?>>
	<div class="container">
		<div class="card card-post-text">		  
		  <div class="card-body">
		  	<h3><?php the_title(); ?></h3>
		    <p class="card-text card-post-text-a"><small class="text-muted">Publicado: <?php echo get_the_date(); ?></small></p>
			      <p class="card-text card-post-text-a"><small class="text-muted">Categorias:  <?php the_category(' '); ?></small>, <small class="text-muted"><?php the_tags('Tags: ', ', ') ?></small></p>
		      		<p><?php the_content(); ?></p>
		      
		  </div>
		</div>
	</div>	
</article>