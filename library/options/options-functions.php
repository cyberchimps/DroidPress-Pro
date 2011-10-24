<?php
/* 
	Options	Functions
	Author: Tyler Cuningham
	Establishes the theme options functions.
	Copyright (C) 2011 CyberChimps
	Version 2.0
	
*/

/* Hide Post Icons */

function hide_post_icons() {

	global $themename, $themeslug, $options;
	
	if ($options[$themeslug.'_hide_post_icons'] == "1") {

		echo '<style type="text/css">';
		echo ".format-icon {display: none;}";
 		echo ".post_container {padding-left: 15px;}";
		echo '</style>';
		
	}
	
}
add_action( 'wp_head', 'hide_post_icons');

/* Plus 1 Allignment */

function plusone_alignment() {

	global $themename, $themeslug, $options;
	
	if ($options[$themeslug.'_show_fb_like'] == "1" AND $options[$themeslug.'_show_gplus'] == "1" ) {

		echo '<style type="text/css">';
		echo ".gplusone {float: right; margin-right: -38px;}";
		echo '</style>';
		
	}
	
}
add_action( 'wp_head', 'plusone_alignment');


/* Featured Image Alignment */

function featured_image_alignment() {

	global $themename, $themeslug, $options;
	
	if ($options[$themeslug.'_featured_images'] == "right" ) {

		echo '<style type="text/css">';
		echo ".featured-image {float: right;}";
		echo '</style>';
		
	}
	
	elseif ($options[$themeslug.'_featured_images'] == "center" ) {

		echo '<style type="text/css">';
		echo ".featured-image {text-align: center;}";
		echo '</style>';
		
	}
	
	else {

		echo '<style type="text/css">';
		echo ".featured-image {float: left;}";
		echo '</style>';
		
	}

	
}
add_action( 'wp_head', 'featured_image_alignment');


/* Post Meta Data width */

function post_meta_data_width() {

	global $themename, $themeslug, $options;

	if ($options[$themeslug.'_blog_sidebar'] == "two-right" OR $options[$themeslug.'_blog_sidebar'] == "right-left") {

		echo '<style type="text/css">';
		echo ".postmetadata {width: 480px;}";
		echo '</style>';
		
	}
	
}
add_action( 'wp_head', 'post_meta_data_width');


/* Site Title Color */

function add_sitetitle_color() {

	global $themename, $themeslug, $options;

	if (isset($options[$themeslug.'_sitetitle_color']) == "") {
		$sitetitle = 'ffffff';
	}
	
	else {
		$sitetitle = $options[$themeslug.'_sitetitle_color']; 
	}		
	
		echo '<style type="text/css">';
		echo ".sitename a {color: #$sitetitle;}";
		echo '</style>';
		
}
add_action( 'wp_head', 'add_sitetitle_color');

/* Link Color */

function add_menu_color() {

	global $themename, $themeslug, $options;

	if ($options[$themeslug.'_custom_menu_color'] == "") {
		$color = '3B5A7B';
	}

	else { 
		$color = $options[$themeslug.'_custom_menu_color']; 
	}				
	
		echo '<style type="text/css">';
		echo "#navbackground {background-color: #$color;}";
		echo '</style>';
		
}
add_action( 'wp_head', 'add_menu_color');



/* Link Color */

function add_link_color() {

	global $themename, $themeslug, $options;

	if (isset($options[$themeslug.'_link_color']) == "") {
		$link = '3B5A7B';
	}

	else { 
		$link = $options[$themeslug.'_link_color']; 
	}				
	
		echo '<style type="text/css">';
		echo ".entry a {color: #$link;}";
		echo ".meta-rest a {color: #$link;}";
		echo ".sidebar-widget-style a {color: #$link;}";
		echo ".format-link .entry a {color: #$link;}";
		echo '</style>';
		
}
add_action( 'wp_head', 'add_link_color');


/* Menu Link Color */

function add_menulink_color() {

	global $themename, $themeslug, $options;

	if (isset($options[$themeslug.'_menulink_color']) == "") {
		$sitelink = 'FFFFFF';
	}
	
	else{ 
		$sitelink = $options[$themeslug.'_menulink_color']; 
	}	
		
		echo '<style type="text/css">';
		echo ".sf-menu a {color: #$sitelink;}";
		echo '</style>';
}
add_action( 'wp_head', 'add_menulink_color');

/* Post Title Color */

function add_posttitle_color() {

	global $themename, $themeslug, $options;

	if (isset($options[$themeslug.'_posttitle_color']) == "") {
		$posttitle = '000000';
	}
	else {
		$posttitle = $options[$themeslug.'_posttitle_color']; 
	}		
		
		echo '<style type="text/css">';
		echo ".posts_title a {color: #$posttitle;}";
		echo '</style>';

}
add_action( 'wp_head', 'add_posttitle_color');

/* Footer Color */

function add_footer_color() {

	global $themename, $themeslug, $options;

	if (isset($options[$themeslug.'_footer_color']) != "" && $options[$themeslug.'_footer_color'] != "3B5A7B" ) {
	
		$footercolor = $options[$themeslug.'_footer_color']; 
	
	
		echo '<style type="text/css">';
		echo "#footer {background: #$footercolor;}";
		echo '</style>';
	}
}
add_action( 'wp_head', 'add_footer_color');

/* Menu Font */
 
function add_menu_font() {
		
	global $themename, $themeslug, $options;	
		
	if ($options[$themeslug.'_menu_font'] == "") {
		$font = 'Cantarell';
	}		
		
	elseif ($options[$themeslug.'_custom_menu_font'] != "") {
		$font = $options[$themeslug.'_custom_menu_font'];	
	}
	
	else {
		$font = $options[($themeslug.'_menu_font')]; 
	}
	
		$fontstrip =  ereg_replace("[^A-Za-z0-9]", " ", $font );
	
		echo "<link href='http://fonts.googleapis.com/css?family=$font' rel='stylesheet' type='text/css' />";
		echo '<style type="text/css">';
		echo ".sf-menu a {font-family: $fontstrip;}";
		echo '</style>';
}
add_action( 'wp_head', 'add_menu_font');

/* Custom CSS */

function custom_css() {

	global $themename, $themeslug, $options;
	
	$custom = $options[$themeslug.'_css_options'];
	echo '<style type="text/css">' . "\n";
	echo custom_css_filter ( $custom ) . "\n";
	echo '</style>' . "\n";
}

function custom_css_filter($_content) {
	$_return = preg_replace ( '/@import.+;( |)|((?:\/\*(?:[^*]|(?:\*+[^*\/]))*\*+\/))/i', '', $_content );
	$_return = htmlspecialchars ( strip_tags($_return), ENT_NOQUOTES, 'UTF-8' );
	return $_return;
}
		
add_action ( 'wp_head', 'custom_css' );

?>