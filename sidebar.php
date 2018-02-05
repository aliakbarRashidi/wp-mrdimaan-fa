<!-- Sidebar Section -->
<div class="col s12 m12 l4 ">
    <aside>
        <div class="row">
            <div class="col s12 m6 l12 no-padding">

                <div class="col s12">
                    <div class="card side">
                        <div class="card-content">
                            <span class="card-title">
                                <h2> درباره ی سایت
                                    <i class="material-icons hide-on-small-only">info_outline</i>
                                </h2>
                            </span>
                            <p>
                            <?php $about_site = esc_attr( get_option( 'about_site' ) ); echo $about_site; ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col s12">
                    <div class="card side">
                        <div class="card-content">
                            <span class="card-title">
                                <h2> جستجو کنید!
                                    <i class="material-icons hide-on-small-only">search</i>
                                </h2>
                            </span>
                            <?php get_search_form(true); ?>
                        </div>
                    </div>
                </div>

                <div class="col s12">
                    <div class="card side">
                        <div class="card-content">
                            <span class="card-title">
                                <h2> لینک های مفید
                                    <i class="material-icons hide-on-small-only">bookmark_border</i>
                                </h2>
                            </span>
                            <div class="collection">
                            <?php  wp_nav_menu( array(
                				'menu' => 'links',
                				'theme_location'=>'link_menu',
                				'items_wrap'    => '%3$s',
                				'container' => false,
                				'walker' => new dimaan_link_walker()
           						));?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col s12">
                    <div class="card side">
                        <div class="card-content">
                            <span class="card-title">
                                <h2> ارتباط با من
                                    <i class="material-icons hide-on-small-only">send</i>
                                </h2>
                            </span>
                            <div class="social-icons">
                                <?php 
                                    $my_email = esc_attr( get_option( 'email_handler' ) );
                                    $my_github = esc_attr( get_option( 'github_handler' ) );
                                    $my_twitter = esc_attr( get_option( 'twitter_handler' ) );
                                    $my_facebook = esc_attr( get_option( 'facebook_handler' ) );
                                    $my_gplus = esc_attr( get_option( 'gplus_handler' ) );
                                    $my_insta = esc_attr( get_option( 'insta_handler' ) );
                                    $my_pintrest = esc_attr( get_option( 'pintrest_handler' ) );
                                    $my_soundcloud = esc_attr( get_option( 'sc_handler' ) );
                                    $my_telegram = esc_attr( get_option( 'telegram_handler' ) );
                                    $my_youtube = esc_attr( get_option( 'youtube_handler' ) );

                                    if ( $my_email != '' )
                                        echo '<a href="mailto:'. $my_email .'" target="_blank"><img src="'. get_template_directory_uri() . '/img/social/email.svg" alt="Email" title="ایمیل" class="social-icon"></a> ';
                                    if ( $my_github != '' )
                                        echo '<a href="https://github.com/'. $my_github .'" target="_blank"><img src="'. get_template_directory_uri() . '/img/social/github.svg" alt="Github" title="گیت هاب" class="social-icon"></a> ';
                                    if ( $my_twitter != '' )
                                        echo '<a href="https://twitter.com/'. $my_twitter .'" target="_blank"><img src="'. get_template_directory_uri() . '/img/social/twitter.svg" alt="Twitter" title="توییتر" class="social-icon"></a> ';
                                    if ( $my_facebook != '' )
                                        echo '<a href="https://www.facebook.com/'. $my_facebook .'" target="_blank"><img src="'. get_template_directory_uri() . '/img/social/facebook.svg" alt="Facebook" title="فیس بوک" class="social-icon"></a> ';
                                    if ( $my_gplus != '' )
                                        echo '<a href="https://plus.google.com/'. $my_gplus .'" target="_blank"><img src="'. get_template_directory_uri() . '/img/social/google-plus.svg" alt="Google-plus" title="گوگل پلاس" class="social-icon"></a> ';
                                    if ( $my_insta != '' )
                                        echo '<a href="https://www.instagram.com/'. $my_insta .'" target="_blank"><img src="'. get_template_directory_uri() . '/img/social/instagram.svg" alt="Instagram" title="اینستاگرام" class="social-icon"></a> ';
                                    if ( $my_pintrest != '' )
                                        echo '<a href="https://www.pinterest.com/'. $my_pintrest .'" target="_blank"><img src="'. get_template_directory_uri() . '/img/social/pinterest.svg" alt="Pinterest" title="پینترست" class="social-icon"></a> ';
                                    if ( $my_soundcloud != '' )
                                        echo '<a href="https://soundcloud.com/'. $my_soundcloud .'" target="_blank"><img src="'. get_template_directory_uri() . '/img/social/soundcloud.svg" alt="Soundcloud" title="سوند کلود " class="social-icon"></a> ';
                                    if ( $my_telegram != '' )
                                        echo '<a href="http://telegram.me/'. $my_telegram .'" target="_blank"><img src="'. get_template_directory_uri() . '/img/social/telegram.svg" alt="Telegram" title="تلگرام" class="social-icon"> ';
                                    if ( $my_youtube != '' )
                                        echo '<a href="https://www.youtube.com/channel/'. $my_youtube .'" target="_blank"><img src="'. get_template_directory_uri() . '/img/social/youtube.svg" alt="Youtube" title="یوتیوب" class="social-icon"></a> ';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col s12 m6 l12 no-padding">

                <div class="col s12">
                    <div class="card side">
                        <div class="card-content">
                            <span class="card-title">
                                <h2> آرشیو مطالب
                                    <i class="material-icons hide-on-small-only">format_list_bulleted</i>
                                </h2>
                            </span>
                            <div class="collection">
                            <?php $args = array(
								'type'            => 'monthly',
								'limit'           => '',
								'format'          => 'smh', 
								'before'          => '',
								'after'           => '',
								'echo'            => 1,
								'order'           => 'DESC',
							    'post_type'     => 'post',
							    'show_post_count' => true
								);
                                wp_get_archives( $args );
								?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </aside>
</div>