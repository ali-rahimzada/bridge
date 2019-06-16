<?php
/**
 * The header for the OnePress theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OnePress
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<section class="side_menu right  side_area_alignment_left" tabindex="0" style="overflow-y: hidden; outline: none;">
        <a href="#" target="_self" class="close_side_menu"></a>
        <div id="media_image-3" class="widget widget_media_image posts_holder">
            <img width="99" height="46" src="http://bridge106.qodeinteractive.com/wp-content/uploads/2017/11/logo-3.png" class="image wp-image-356  attachment-full size-full" alt="s" style="max-width: 100%; height: auto;"></div><div id="text-4" class="widget widget_text posts_holder">			<div class="textwidget"><p>Alienum phaedrum torquatos nec eu, vis detraxitssa periculiser ex, nihil expetendis in mei eis an pericula es aperiri.</p>
        </div>
		</div>
        <div id="qode_instagram_widget-3" class="widget widget_qode_instagram_widget posts_holder">
            <h5></h5>
        </div>
    </section>
	
<?php do_action( 'onepress_before_site_start' ); ?>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'onepress' ); ?></a>
    <?php
    /**
     * @since 2.0.0
     */
    onepress_header();
    ?>
<!--    <Sidebar  -->
<!--    <nav id="sidebar" class="active">-->
<!--        <div class="sidebar-header">-->
<!--            <h3>Bootstrap Sidebar</h3>-->
<!--        </div>-->
<!---->
<!--    </nav>-->
