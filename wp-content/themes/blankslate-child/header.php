<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>" />
      <meta name="viewport" content="width=device-width" />
      <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;700;800&display=swap" rel="stylesheet">
      <?php wp_head(); ?>
   </head>
   <body <?php body_class(); ?>>
      <?php wp_body_open(); ?>
      <div id="wrapper" class="hfeed">
      <header id="header" role="banner">
         <div id="branding">
            <div class="logo" id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
               <a href="../">
               <img src="<?php echo  get_stylesheet_directory_uri();?>/assets/images/logo.svg" alt="logo"/>
               </a>
            </div>
            <div id="site-description"<?php if ( !is_single() ) { echo ' itemprop="description"'; } ?>><?php bloginfo( 'description' ); ?></div>
         </div>
         <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
         </nav>
         <div class="commander">
            <div class=boutton>
         <a class=lienbutton href="<?php echo home_url("/"); ?>/commander/">Commander</a>
</div>
</div>
      </header>
      <div id="container">
        <main id="content" role="main">