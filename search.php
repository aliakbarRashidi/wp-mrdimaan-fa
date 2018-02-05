<?php get_header(); ?>
<div class="row">
  <div class="col m1 hide-on-small-only"></div>
  <div class="col s12 m10 content-row no-padding">
    <!-- Post Section -->
    <div class="col s12 m12 l8">
    <div class="card post">
	    <div class="card-content search-title">
            <span class="card-title"><i class="material-icons right">search</i><h2><?php printf('نمایش نتایج جستجو برای \'%s\'', '<span class="indigo-text">' . esc_html( get_search_query() ) . '</span>' ); ?></h2></span>
        </div>
    </div>
    <?php
      if (have_posts() ) {
        while ( have_posts() ) {
          the_post();
          get_template_part('inc/templates/content/content', get_post_format());
        }
      }
      
      function smoein_pagination($pages = '', $range = 2)
					{  
					    $showitems = ($range * 2)+1;  

					    global $paged;
					    if(empty($paged)) $paged = 1;

					    if($pages == '')
					    {
					        global $wp_query;
					        $pages = $wp_query->max_num_pages;
					        if(!$pages)
					        {
					            $pages = 1;
					        }
					    }   

					    if(1 != $pages)
					    {
					        echo "<ul class='pagination'>";
					        if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."'><i class='material-icons'>chevron_left</i></a></li>";
					        if($paged == 1 && $showitems < $pages) echo "<li class='disabled'><a href='".get_pagenum_link($paged - 1)."'><i class='material-icons'>chevron_left</i></a></li>";

					        for ($i=1; $i <= $pages; $i++)
					        {
					            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
					            {
					                echo ($paged == $i)? "<li class='active'><a>". dimaan_to_farsi($i) ."</a></li>":"<li class='waves-effect'><a href='".get_pagenum_link($i)."' class='inactive' >". dimaan_to_farsi($i) ."</a></li>";
					            }
					        }

					        if ($paged < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged + 1)."'><i class='material-icons'>chevron_right</i></a></li>";
					        echo "</ul>\n";
					    }
					}
					smoein_pagination('', '2');
    ?> </div> <?php
     get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>