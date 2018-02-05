<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="fontiran.com:license" content="JLMT7">
    <meta charset="UTF-8">
    <meta name="theme-color" content="#673ab7" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
  </head>

  <body>
    <!-- Pre Loaader -->
	  <div id="loader-wrapper">
	  	<div id="loader"></div>
		  <div class="loader-section section-left"></div>
		  <div class="loader-section section-right"></div>
	  </div>
    <main>
      <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper deep-purple darken-2">
            <a href="<?php echo get_home_url(); ?>" class="brand-logo"><img src="<?php $logo = esc_attr( get_option( 'logo_picture' ) ); echo $logo != '' ? $logo : get_template_directory_uri() . '/img/logo.png'  ?>" alt="Logo"></a>
            <a href="#!" data-target="mobile-menu" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
            <?php  wp_nav_menu( array(
                'menu' => 'Primary',
                'theme_location'=>'header_menu',
                'menu_class' => 'hide-on-med-and-down right',
                'menu_id' => 'smh-desktop-navbar',
                'walker' => new dimaan_header_walker()
            	));?>
          </div>
        </nav>
      </div>
      <ul class="sidenav" id="mobile-menu">
        <li>
          <div class="user-view">
            <div class="background">
              <img src="<?php $backpro = esc_attr( get_option( 'backpro_picture' ) ); echo $backpro == '' ? get_template_directory_uri() . '/img/backpro.jpg' : $backpro; ?>">
            </div>
            <a href="<?php echo get_home_url(); ?>"><img class="circle" src="<?php $propic = esc_attr( get_option( 'profile_picture' ) ); if ( $propic != '') {echo $propic;} else {echo get_template_directory_uri() . '/img/user.svg';} ?>"></a>
            <a href="<?php echo get_home_url(); ?>"><span class="white-text name">
              <?php $full_name = esc_attr( get_option( 'full_name' ) ); echo $full_name; ?>
            </span></a>
            <a href="<?php $aemail = esc_attr( get_option( 'email_handler' ) ); echo 'mailto:' . $aemail ?>"><span class="white-text email"><?php echo $aemail == '' ? 'example@domain.com' : $aemail; ?></span></a>
          </div>
        </li>
        <li><a href="<?php echo get_home_url(); ?>"><i class="material-icons">home</i> خانه </a></li>
        <?php wp_nav_menu( array(
                'menu' => 'Mobile',
                'theme_location'=>'mobile_menu',
                'menu_class' => '',
                'menu_id' => '',
                'items_wrap'    => '%3$s',
                'walker' => new dimaan_mobile_walker()
           		));?>
      </ul>
      <!-- Header -->
      <div class="row deep-purple header-row">
        <header>
          <div class="col m1 hide-on-small-only"></div>
          <div class="col s12 m10">
            <div class="card header-card">
              <div class="card-content">
                <h1><?php bloginfo( 'name' ); ?></h1>
                <p><?php bloginfo( 'description' ); ?></p>
                <img src="<?php if ( $propic != '') {echo $propic;} else {echo get_template_directory_uri() . '/img/user.svg';}; ?>" alt="Profile">
              </div>
            </div>
          </div>
        </header>
      </div>