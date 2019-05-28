<div class="col-lg-12">
  <div class="card mb-3">
    <div class="row no-gutters">
      <div class="col-md-3">
          <?php 
            //Pequeno -> thumbnail, Medio -> medium, Grande -> large, Full -> full
            the_post_thumbnail('medium', array('class' => 'card-img card-image-height')); 
          ?>
      </div>
      <div class="col-md-8">
        <div class="card-body card-posts-text">        
          <h5 class="card-title"><?php the_title(); ?></h5>
          <p class="card-text card-post-text-a"><small class="text-muted">Publicado: <?php echo get_the_date(); ?></small></p>
          <p class="card-text"><?php the_content(); ?>
            <small class="text-muted card-post-text-a">Categorias: <?php the_category(' '); ?></small> 
            <small class="text-muted card-post-text-a"><?php the_tags('Tags: ', ', ') ?></small>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>