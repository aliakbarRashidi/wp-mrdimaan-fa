<div class="card post">
        <div class="card-content">
          <span class="card-title">
            <a href="<?php the_permalink(); ?>">
              <h2> <?php the_title() ?>
                <i class="material-icons hide-on-small-only">image</i>
              </h2>
            </a>
          </span>
          <?php  the_post_thumbnail(); ?>
          <?php the_content() ?>
          <div class="divider"></div>
          <span class="post-details">دسته بندی:
          <?php the_category('، ') ?>
          </span>
          <span class="post-details"> تاریخ:
            <span class="number"><?php echo get_the_date('Y/m/d');?></span>
          </span>
          <span class="post-details">ساعت:
          <?php the_time(); ?>
          </span>
        </div>
      </div>
      <div class="card post">
    <div class="card-content">
        <p>برچسب ها: <?php the_tags( '', ' • ', '' ); ?>
   </div>
</div>
<?php if (comments_open())
{ 
comments_template();
}else {
echo '<div class="card post"><div id="comments" class="card-content"><span class="card-title" style="margin-bottom:0;"><h2>دیدگاه ها برای این پست بسته شده اند.</h2></span></div></div>';
} ?>