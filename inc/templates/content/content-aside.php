<div class="card post">
        <div class="card-content">
        <?php the_content(); ?>
          <div class="divider"></div>
          <span class="post-details">دسته بندی:
          <?php the_category('، ') ?>
          </span>
          <span class="post-details"> تاریخ:
            <span class="number"><?php echo get_the_date('Y/m/d');?></span>
          </span>
          <a href="<?php the_permalink(); ?>" class="more-link waves-effect">
            <b>
            <?php
            $value = get_post_meta( $post->ID , '_post_data_value_key_more', true );
            if ( $value != '' ) {
                echo $value;
            } else {
                echo 'ادامه مطلب';
            }
            ?>
            </b>
          </a>
        </div>
      </div>