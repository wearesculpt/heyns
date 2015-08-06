<!DOCTYPE html>
<!--[if IE 8]>               <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" prefix="og: http://ogp.me/ns#"> <!--<![endif]-->

<html>
<head>
    <link rel="icon" type="image/png" href="http://heynsicecream.com/wp-content/uploads/2015/07/favicon.png"/>
    
    <meta charset="UTF-8"/>
    
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta name="viewport" content="width=320, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    
    <meta name="author" content="Sculpt, LLC">
    <meta name="keywords" content="ice cream, ice cream iowa city, iowa city, iowa, dessert, restaurant"/>

    <meta property="fb:app_id" content="335003170039359" />
    
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    
        <!--    Fonts from Google-->
    <link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic|Open+Sans:300italic,800italic,300,800' rel='stylesheet' type='text/css'>
        <!--    FontAwesome-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
<!--    Facebook SDK-->
    <script>
    window.fbAsyncInit = function() {
    FB.init({
      appId      : '335003170039359',
      xfbml      : true,
      version    : 'v2.2'
    });
    };

    (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    
    
    <header class="container">
        <?php
        if(is_active_sidebar('announcement-banner')){
        dynamic_sidebar('announcement-banner');
        } ?>
        
        <div class="header row row--fullWidth">
            <div class="column size1of4">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <div class="mainLogo" style="background-image:url('<?php echo get_template_directory_uri(); ?>/resources/images/heyns_logo_web.png');"></div>
                </a>
            </div>
            <div class="js-menuToggle"><i class="fa fa-reorder fa-fw"></i></div>
            
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_class' => 'mainMenu' ) ); ?>

        </div>
    </header>