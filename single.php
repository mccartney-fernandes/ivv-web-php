<?php get_header(); ?>
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height ?>" width="<?php  echo get_custom_header()->width ?>" alt="">
	<?php 
		while(have_posts()): the_post();

			if( in_category( 'fotos' ) ){
			    get_template_part( 'template-parts/content', 'image' );
			}else if(in_category( 'videos' )){
			    get_template_part('template-parts/content', 'video');
			}else{
				 get_template_part('template-parts/content', 'posts');
			}

			//verificando se ha comentarios no posts
			if(comments_open() || get_comments_number()):
				comments_template();
			endif;		
			
		endwhile;
	?>	      
<?php get_footer(); ?>