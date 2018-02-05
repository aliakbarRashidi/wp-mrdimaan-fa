<?php get_header(); ?>
<div class="row">
  <div class="col m1 hide-on-small-only"></div>
  <div class="col s12 m10 content-row no-padding">
    <!-- Post Section -->
    <div class="col s12 m12 l8">
    <?php
      if (have_posts() ) {
        while ( have_posts() ) {
          the_post();
          get_template_part('inc/templates/single/single', get_post_format());
        }
      }
      ?> 
      </div> 
      <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>