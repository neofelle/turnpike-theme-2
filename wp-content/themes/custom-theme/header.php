<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage custom-theme
 * @since custom-theme 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="utf-8"/>
	<title><?php bloginfo('title');?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/font-awesome.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/owl-carousel/owl.carousel.min.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/owl-carousel/owl.theme.default.min.css"/>
	<?php wp_head(); ?>
</head>
<body class="page-template page-template-onecolumn-page page-template-onecolumn-page-php page page-id-15 desktop chrome">
<div class="col-md-4 left no-space logo" style="position: absolute;z-index: 4;">
	<a href="<?php echo get_option('home'); ?>">
		<?php the_custom_logo(); ?>
	</a>
</div>
<div class="col-md-12 padding-25" style="background-color: black;height: 50px;">
	<?php                   
        $header_number    = $GLOBALS['cgv']['default-contact-number'];
        $cf_header_number = get_post_meta($post->ID, 'header_contact_number', true);                    
        if( $cf_header_number != "" ){
            $header_number = $cf_header_number;
        }
    ?>
	<p class="left color-white right" style="font-size: 20px;color: #386b08;font-weight: bold;margin-top: 15px;text-align: right;"><a class="color-white" href="tel:+<?php echo str_replace("-", "", $header_number); ?>"><?php echo $header_number; ?></a></p><i class="fa fa-phone left contact-icon color-white right" aria-hidden="true" style="font-size: 20px"></i>
</div>
<section class="header">

<div class="container-fullscreen line-header" style="position: absolute;z-index: 2 !important;width: 100%;border-bottom: 1px solid #afa7a7;height: 145px;">
	<div class="c-md-12 left no-space" style="">
		<nav id="nav" role="navigation">
			<a href="#nav" title="Show navigation"></a>
			<a href="#" title="Hide navigation"></a>
			<?php 
				$menuargs = array(
					"theme_location" => "primary",
					"menu_class" => "s-menu",
					"menu_id" => "main-menu",
				);
				$items = wp_get_nav_menu_items( 'main-menu', $menuargs); 
			?> 
			<ul class="clearfix menu-header" style="margin-bottom: 1px !important;    z-index: 34 !important;width: 100%;margin-top: 50px;">
				<?php foreach( $items as $item ){ ?>
					<li class="smaller-li"><a href="<?php echo $item->url; ?>" class="left"><?php echo $item->title; ?></a></li>	
				<?php } ?>				
				
				<li class="smaller-li-17 contact-menu"></li>
			</ul>
		</nav>
	</div>
</div>
</section>



