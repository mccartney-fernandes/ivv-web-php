<article id="post-<?php the_ID(); ?>" <?php post_class(array('class' => 'single-posts')) ?>>
	<div class="container">
		<div class="card card-posts-text">
		  <div class="card-header">
		    <h5 class="card-title text-center"><?php the_title(); ?></h5>
		  </div>
		  <div class="card-body">
		    <blockquote class="blockquote mb-0">
		      <p><?php the_content(); ?></p>
		      <footer class="blockquote-footer"><p class="card-text card-post-text-a"><small class="text-muted">Published <?php echo get_the_date(); ?> in by <?php the_author_posts_link(); ?></small></p>
			      <p class="card-text card-post-text-a"><small class="text-muted">Categories: <?php the_category(' '); ?></small></p>
		  		  <p class="card-text card-post-text-a"><small class="text-muted"><?php the_tags('Tags: ', ', ') ?></small></p></footer>
		    </blockquote>
		  </div>
		</div>
	</div>

	
		
</article>