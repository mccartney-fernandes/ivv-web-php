<div class="col-12 col-lg-4 img-content-container">
	  	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array('class' => 'img-thumbnail img-content-fotos'));  ?></a>
	  	<p class="ml-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	  	<br>Autor: <?php the_author_posts_link(); ?><br> <?php the_tags('Tags: ', ', ') ?></p>	
</div>