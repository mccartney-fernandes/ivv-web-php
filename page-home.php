<?php get_header(); ?>

  <main>
    <div class="container-fluid">
    <div class="row main-container">
      <div class="col-12 col-lg-6 ">
        <h2 class="text-center"><?php echo get_theme_mod('set_home_title'); ?></h2>
        
        <p class="lead text-home text-center">
          <?php echo get_theme_mod('set_home_txt'); ?>
        </p>
        <?php if(is_active_sidebar('sidebar-2')): ?>
          <?php dynamic_sidebar('sidebar-2'); ?>
        <?php endif; ?>        
      </div>
      <div class="col-12 col-lg-6 main-img">
        <?php if(is_active_sidebar('sidebar-3')): ?>
          <?php dynamic_sidebar('sidebar-3'); ?>
        <?php endif; ?>
        <!-- <img class="img-fluid" src="http://localhost/wordpress/wp-content/uploads/2019/05/ministros-354x568-187x300.png" alt="" /> -->
      </div>
    </div>
    </div>
  </main>
      
<?php get_footer(); ?>
    
     
