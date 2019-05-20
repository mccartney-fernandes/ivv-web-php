<div class="card mb-3 ">
  <div class="row no-gutters">
    <div class="col-md-4">
      <?php 
        //Pequeno -> thumbnail, Medio -> medium, Grande -> large, Full -> full
        the_post_thumbnail([250,250]); 
      ?>
    </div>
    <div class="col-md-8">
      <div class="card-body card-posts-text">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <p class="card-text"><small class="text-muted">Published <?php echo get_the_date(); ?> in by <?php the_author_posts_link(); ?></small></p>
        <p class="card-text"><?php the_content(); ?></p>
        <p class="card-text"><small class="text-muted">Categories: <?php the_category(' '); ?></small></p>
        <p class="card-text"><small class="text-muted"><?php the_tags('Tags: ', ', ') ?></small></p>
      </div>
    </div>
  </div>
</div>