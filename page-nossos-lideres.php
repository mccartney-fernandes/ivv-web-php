<?php get_header(); ?>
  <div class="container-fluid generate-template-container-fluid">
    <h3><?php the_title(); ?></h3>
  </div>
  <main>
    <div class="container lideres-container">
        <div class="row lideres-row">
          <div class="col-lg-4 lideres-profile">
            <?php if(is_active_sidebar('sidebar-5')): ?>
                <?php dynamic_sidebar('sidebar-5'); ?>
              <?php endif; ?>
          </div>
          <div class="col-lg-4 lideres-profile">
            <?php if(is_active_sidebar('sidebar-6')): ?>
                <?php dynamic_sidebar('sidebar-6'); ?>
              <?php endif; ?>
          </div> 
        </div>
        <div class="row lideres-row">
          <div class="col-lg-3 lideres-profile">
            <?php if(is_active_sidebar('sidebar-7')): ?>
                <?php dynamic_sidebar('sidebar-7'); ?>
              <?php endif; ?>
          </div>
          <div class="col-lg-3 lideres-profile">
            <?php if(is_active_sidebar('sidebar-8')): ?>
                <?php dynamic_sidebar('sidebar-8'); ?>
              <?php endif; ?>
          </div>
          <div class="col-lg-3 lideres-profile">
            <?php if(is_active_sidebar('sidebar-9')): ?>
                <?php dynamic_sidebar('sidebar-9'); ?>
              <?php endif; ?>
          </div>
          <div class="col-lg-3 lideres-profile">
            <?php if(is_active_sidebar('sidebar-10')): ?>
                <?php dynamic_sidebar('sidebar-10'); ?>
              <?php endif; ?>
          </div>
        </div>

        
    </div>
  </main>
      
<?php get_footer(); ?>
    
     
