<?php 
/*

Template Name: Template para Eventos

*/
?>

<?php get_header(); ?>
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height ?>" width="<?php  echo get_custom_header()->width ?>" alt="">

  <main>
    
          <?php 
            if(have_posts()):
              while(have_posts()): the_post(); 
          ?>
            <div class="container-fluid generate-template-container-fluid">
            	<h3>EVENTOS</h3>
            </div>
            <div class="container generate-template-container">
            	<div class="col-md-12">
  		         	<?php the_content(); ?>
  		        </div>
            </div>
          <?php 

              endwhile; 
            else:

          ?>
            <p>nao ha postagem</p>
        <?php endif; ?>        
   
  </main>
      
<?php get_footer(); ?>