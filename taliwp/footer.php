<footer>
  <!-- <p>Copyright © 2024 TaliWP.</p> -->
  <?php 
    wp_nav_menu(array(
      'theme_location' => 'footer',
      'menu_id' => 'menu-footer', // ID attribué au menu
    ));
  ?>
  <p>Copyright © 2024 TaliWP.</p>
</footer>
<?php  //get_template_part('template-parts/lightbox');?>
<?php wp_footer(); ?>  
</div>
</body>
</html>