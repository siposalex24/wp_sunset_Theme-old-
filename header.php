<!DOCTYPE html>
<html lang="en"> 
<head>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="wp-content/themes/iap_siposalex_theme/assets/images/logo.png"> 

    <!-- Head-->

    <?php
    wp_head();
    ?>

</head>

<body>

<div class="main-wrapper">

<header class="header">

    <div id="navigation" class="collapse navbar-collapse flex-column">   
        <?php
        wp_nav_menu(
        array(
        'menu' => 'primary',
        'container' => '',
        'theme_location' => 'primary'
        'items_wrap' => '<ul id="" class="navbar-nav flex-column text-sm-center text-md-left">%3&s</ul>' <!--1h:03-->
        )
        );
        ?>

    <ul class="social-list list-inline py-3 mx-auto"> <!--hard code-->
    <li></li>
    <li></li>    
    <li></li>
    <li></li> 
    </ul>
    
    
       




    <h1 class=""><?php the_title(); ?></h1>
    <h2></h2>
</header> 