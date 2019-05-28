<div class="col-lg-8 offset-lg-2 mt-2">
	<div class="card text-white card-video">
	  <h2 class="text-center"><?php the_title(); ?></h2>  
	  <div class="embed-responsive embed-responsive-21by9">
	  	<spam class="text-center"><?php the_content(); ?></spam>
	  </div>
  		<p class="card-text text-center"><small class="text-muted">Publicado: <?php echo get_the_date(); ?>, Categorias:  <?php the_category(' '); ?></small>, <small class="text-muted"><?php the_tags('Tags: ', ', ') ?></small></p>
	</div>
</div>