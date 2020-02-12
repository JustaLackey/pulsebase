<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

    <head>
        <meta charset="utf-8">

        <?php // force Internet Explorer to use the latest rendering engine available ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title><?php wp_title(''); ?></title>

        <?php // mobile meta (hooray!) ?>
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
        <!--[if IE]>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<![endif]-->
        <?php // or, set /favicon.ico for IE10 win ?>
        <meta name="msapplication-TileColor" content="#b2b2b2">
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
        <meta name="theme-color" content="#abc2c8">

        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <?php // wordpress head functions ?>
        <?php wp_head(); ?>
        <?php // end of wordpress head ?>

        <?php // drop Google Analytics Here ?>
        <?php // end analytics ?>
        <script type='text/javascript' src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/library/js/slick.min.js'></script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/library/js/isotope.pkgd.min.js'></script>
        <script type="text/javascript" src="<?php bloginfo(template_directory) ?>/library/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo(template_directory) ?>/library/js/lity.js"></script>
        <link rel="stylesheet" href="<?php bloginfo(template_directory) ?>/library/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo(template_directory) ?>/library/css/lity-2.css">
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/slick.css"/>

        <!-- Open Graph data -->
        <!--
        <meta property="og:title" content="A&M CAPITAL" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo site_url(); ?>" />
        <meta property="og:image" content="<?php echo site_url(); ?>/wp-content/uploads/2018/10/amcp_header-e1540497569493.png" />
        <meta property="og:description" content="Description Here" />
        <meta property="og:site_name" content="A&M Capital" />
    -->
    </head>

    <body itemscope itemtype="http://schema.org/WebPage">
