<?php
/**
 * The header for our theme.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script>window.document.documentElement.className+=" is-enabled";</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="Header" role="banner">

    <div class="Header-container">

      <h1 class="Header-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

      <h2 class="Header-description"><?php bloginfo( 'description' ); ?></h2>

      <nav class="Header-nav" role="navigation">
        <?php wp_nav_menu( array(
          'container' => 'false',
          'menu_class' => 'Header-menu',
          'theme_location' => 'primary'
        ) ); ?>
      </nav>

    </div>

  </header>