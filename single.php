<?php get_header(); ?>
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height ?>" width="<?php  echo get_custom_header()->width ?>" alt="">
	<?php 
		while(have_posts()): the_post();
			get_template_part('template-parts/content', 'posts');

			?>

			<?php
			
		endwhile;
	?>	      
<?php get_footer(); ?>