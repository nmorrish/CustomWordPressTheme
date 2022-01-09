<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- <title>Template</title> -->
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri()?>/assets/favicon.ico" />
        <?php
            wp_head();
        ?>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <?php if (function_exists('the_custom_logo')){
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                    }?>
                    <a class="navbar-brand" href="#">
                        <img class="nm-navbar-logo" src="<?php echo $logo[0];?>"/> 
                        
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarContent">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'container'      => 'ul',
                        'menu_class'     => 'navbar-nav ms-auto mb-2 mb-lg-0', //ul class
                        'depth'          => 2,
                        'theme_location' => 'header-menu',
                        //'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-lg-0 %2$s">%3$s</ul>',
                        'walker'         => new Header_Bs_Menu_Walker()
                    ));
                    ?>
                </div>
            </div>
        </nav>