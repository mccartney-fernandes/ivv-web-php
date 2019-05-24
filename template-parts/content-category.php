<div class="col-lg-12">
  <div class="card mb-3">
    <div class="row no-gutters">
      <div class="col-md-3">
        <a href="<?php the_permalink(); ?>">
          <?php 
            //Pequeno -> thumbnail, Medio -> medium, Grande -> large, Full -> full
            the_post_thumbnail('medium', array('class' => 'card-img card-image-height')); 
          ?>
        </a>
      </div>
      <div class="col-md-8">
        <div class="card-body card-posts-text">        
          <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
          <p class="card-text card-post-text-a"><small class="text-muted">Publicado: <?php echo get_the_date(); ?>, Autor: <?php the_author_posts_link(); ?></small></p>
          <p class="card-text"><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink(); ?>" class="badge badge-pill badge-secondary post-continue">Continue Lendo ...</a>
          <p class="card-text card-post-text-a"><small class="text-muted"><?php the_tags('Tags: ', ', ') ?></small></p>
        </div>
      </div>
    </div>
  </div>
</div>