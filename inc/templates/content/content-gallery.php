<div class="card post">
        <div class="card-content">
          <span class="card-title">
            <a href="<?php the_permalink(); ?>">
              <h2> <?php the_title() ?>
                <i class="material-icons hide-on-small-only">collections</i>
              </h2>
            </a>
          </span>
          <div class="carousel carousel-slider">
            <?php
            $value1 = get_post_meta( $post->ID , '_post_data_value_key_gallery1', true );
            $value2 = get_post_meta( $post->ID , '_post_data_value_key_gallery2', true );
            $value3 = get_post_meta( $post->ID , '_post_data_value_key_gallery3', true );
            $value4 = get_post_meta( $post->ID , '_post_data_value_key_gallery4', true );
            $value5 = get_post_meta( $post->ID , '_post_data_value_key_gallery5', true );

            echo $value1 != '' ?  '<a class="carousel-item" href="#one!"><img src="'. $value1 .'"></a>' : '';
            echo $value2 != '' ?  '<a class="carousel-item" href="#two!"><img src="'. $value2 .'"></a>' : '';
            echo $value3 != '' ?  '<a class="carousel-item" href="#three!"><img src="'. $value3 .'"></a>' : '';
            echo $value4 != '' ?  '<a class="carousel-item" href="#four!"><img src="'. $value4 .'"></a>' : '';
            echo $value5 != '' ?  '<a class="carousel-item" href="#five!"><img src="'. $value5 .'"></a>' : '';
            ?>
          </div>
          <?php the_excerpt() ?>
          <div class="divider"></div>
          <span class="post-details">دسته بندی:
          <?php the_category('، ') ?>
          </span>
          <span class="post-details"> تاریخ:
            <span class="number"> <?php echo get_the_date('Y/m/d');?></span>
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