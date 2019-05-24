 <footer class="mastfoot mt-auto d-flex justify-content-around">
        <?php if(is_active_sidebar('sidebar-11')): ?>
          <?php dynamic_sidebar('sidebar-11'); ?>
        <?php endif; ?>
        <div class="align-self-center text-center">
          Verbo da Vida - Santa Maria da Boa Vista - PE - <a href="http://178.128.147.242" target="_blank">M.I.H.A Sistemas</a>, by <a href="https://github.com/mccartney-sena/themeivv.github.io" target="_blank">@mccartney-Sena</a>.
        </div>
      </footer>

<?php wp_footer(); ?>
<script>
  $(function(){
    //Ativar o Tooltip
    $('[data-toggle="tooltip"]').tooltip()   

  });
</script>
</body>
</html>