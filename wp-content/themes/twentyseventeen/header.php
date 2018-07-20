<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TravelWards</title>
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
<link href="<?php bloginfo('template_url'); ?>/travel/css/app.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/travel/css/vendor.css" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

 <nav class="navbar navbar-light navbar-expand-md">
    <div class="container-fluid">
    <a class="navbar-brand" href="/">
            <img src="<?php bloginfo('template_url'); ?>/travel/assets/logo.svg" class="d-none d-lg-block"/>
            <img src="<?php bloginfo('template_url'); ?>/travel/assets/logo-icon.svg" class="d-block d-lg-none"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            

            <ul class="navbar-nav">
            
            <?php 
                 $menuLocations = get_nav_menu_locations(); 
                 $menuID = $menuLocations['main-nav']; 
                 $primaryNav = wp_get_nav_menu_items($menuID); 
               foreach ( $primaryNav as $navItem ) {
                  echo '<li class="nav-item"> 
                            <a class="nav-link" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a> 
                        </li>';
             }?>
             <!--
                <li class="nav-item active">
                    <a class="nav-link" href="/"><?php the_field('home', $post->ID); ?>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/about"><?php the_field('about', $post->ID); ?></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php the_field('how-to', $post->ID); ?></a>
                </li>

                <li class="nav-item d-md-none d-xl-block  ">
                    <a class="nav-link" href="/faq"><?php the_field('faqs', $post->ID); ?></a>
                </li>

                <li class="nav-item d-md-none d-xl-block  ">
                    <a class="nav-link" href="/contact"><?php the_field('contact-us', $post->ID); ?></a>
                </li>

                <li class="nav-item dropdown  d-none d-md-block d-xl-none px-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php the_field('more', $post->ID); ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right px-4" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item d-block d-xl-none p-3" href="#/faq"><?php the_field('faqs', $post->ID); ?></a>
                        <a class="dropdown-item d-block d-xl-none p-3" href="/contact"><?php the_field('contact-us', $post->ID); ?></a>
                    </div>
                </li>

-->
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" href="#"><img src="<?php bloginfo('template_url'); ?>/travel/assets/icons/phone-outline.svg" class="mr-2"/><?php the_field('phone', $post->ID); ?></a>
                </li>
            </ul>
            <div class="my-2 my-lg-0 ml-3 d-none d-md-block">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown signed-in-dropdown">
                        <div class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="text-black"><?php the_field('user-name', $post->ID); ?></span>
                            <img src="<?php bloginfo('template_url'); ?>/travel/assets/avatar.svg" width="32" height="32" />
                        </div>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">
                                <div class="icon">
                                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/user-dropdown/manage.svg" />
                                </div>
                               <?php the_field('manage', $post->ID); ?>
                            </a>
                            <a class="dropdown-item" href="#">
                                <div class="icon">
                                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/user-dropdown/account.svg" />
                                </div>
                                Account<?php the_field('account', $post->ID); ?>
                            </a>
                            <a class="dropdown-item" href="#">
                                <div class="icon">
                                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/user-dropdown/support.svg" />
                                </div>
                                <?php the_field('customer', $post->ID); ?>
                            </a>
                            <a class="dropdown-item" href="#">
                                <div class="icon">
                                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/user-dropdown/staff.svg" />
                                </div>
                                <?php the_field('staff', $post->ID); ?>
                            </a>

                            <a class="dropdown-item" href="#">
                                <div class="icon">
                                    <img src="<?php bloginfo('template_url'); ?>/travel/assets/user-dropdown/log-out.svg" />
                                </div>
                                <?php the_field('log-out', $post->ID); ?>
                            </a>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
        </dvi>
</nav> 

	