<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        <?php wp_title('|', true, 'right');
        bloginfo('name'); ?>
    </title>
    <!-- <title>NECT .:. The North-East Children's Trust</title> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/socicon.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/flexslider.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/spacing.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
    <link href="lightbox/css/lightbox.css" rel="stylesheet" type="text/css" /> -->
    <link rel="icon" type="image/x-icon" href="img/favicon.png" />

    <?php wp_head(); ?>
</head>

<body  <?php body_class(); ?>>
    <div class="nav-container">
        <nav>
            <div class="nav-bar nav--absolute bg--white" data-fixed-at="400">
                <div class="col-md-2 text-center-xs">
                    <div class="nav-module logo-module">
                        <a href="/">
                            <img class="logo" alt="NECT Logo" src="<?= get_template_directory_uri() ?>/img/nect-logo.png" />
                        </a>
                    </div>
                </div>

                <div class="nav-module menu-module col-md-10 col-xs-12 text-center text-left-xs">
                    <!-- <ul class="menu">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Board of Trustees</a></li>
                        <li><a href="#">Our Projects</a></li>
                        <li><a href="#">Our Galllery</a></li>
                        <li><a href="#">Videos</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul> -->
                    <?php
                        $args = array(
                            'theme_location' => 'main-menu',
                            'menu' => 'main-menu',
                            'menu_class' => 'menu',
                            'container' => 'false',
                            'menu_id' => false,
                        );

                        wp_nav_menu($args);
                    ?>
                </div>
            </div>
            <div class="nav-mobile-toggle visible-sm visible-xs">
                <i class="ion-drag"></i>
            </div>
        </nav>
    </div>