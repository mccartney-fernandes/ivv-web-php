<?php get_header(); ?>

  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <?php 
            if(have_posts()):
              while(have_posts()): the_post(); 
          ?>
            <p>conteudo da pagina contato</p>
          <?php 

              endwhile; 
            else:

          ?>
            <p>nao ha postagem</p>
        <?php endif; ?>
        </div>
      </div>
    </div>
  </main>
      
<?php get_footer(); ?>  
    
     
