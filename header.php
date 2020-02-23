<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark" role="navigation">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#top-menu-container" aria-controls="top-menu-container" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
            <?php
            wp_nav_menu( array(
                'theme_location'    => 'top-menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'top-menu-container',
                'menu_class'        => 'nav navbar-nav w-100 justify-content-center pt-1 pb-1',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) ); 
            ?>
        </div>
    </nav>