<div class="col-lg-12">
	<div class="card text-white card-video">
	  <h2 class="text-center"><?php the_title(); ?></h2>  
	  <div class="embed-responsive embed-responsive-21by9">
	  	<spam class="text-center"><?php the_content(); ?></spam>
	  </div>
	  <p class="text-center">
	  	Publicado: <?php echo get_the_date(); ?>, Autor: <?php the_author_posts_link(); ?>
	  </p>
	</div>
</div>