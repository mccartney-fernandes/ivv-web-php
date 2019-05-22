<article id="post-<?php the_ID(); ?>" <?php post_class(array('class' => 'single-posts')) ?>>
	<div class="container">
		<div class="card card-post-text">
		  <div class="card-header">
		    <h3 class="card-title text-center"><?php the_title(); ?></h3>
		  </div>
		  <div class="card-body">
		  	<blockquote class="blockquote">
			  <p class="mb-0"><?php the_content(); ?></p>
			  <footer class="blockquote-footer card-post-text-a">Autor: <?php the_author_posts_link(); ?>
			  	<small class="text-muted">Categorias: <?php the_category(' '); ?></small> <small class="text-muted"><?php the_tags('Tags: ', ', ') ?></small>
			  </footer>
			</blockquote>
		  </div>
		</div>
	</div>	
</article>