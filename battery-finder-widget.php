<?php
/*
Plugin Name: Battery Finder widget
Plugin URI: http://batteryfinder.global-roam.com/
Description: Use [battery-finder-widget token='your-api-token'] to insert this widget into your page.
Author: Global-Roam
Author URI: http://www.global-roam.com/
Version: 1.0
*/

// short code attributes can only contain upper and lowercase letters, digits and underscores
// https://codex.wordpress.org/Shortcode_API

add_shortcode( 'battery-finder-widget', 'battery_finder_widget' );

function battery_finder_widget( $atts ) {

	$apiToken = $atts['token'];
  $dataParams = '{ "apiToken": "' . $apiToken . '" }';

  // in PHP, double quoted strings support string interpolation.
  // http://au2.php.net/manual/en/language.types.string.php#language.types.string.parsing

	$shortcode_text = "<div class='gr-storage-catalogue'></div>";
	$shortcode_text .= "<script class='gr-storage-catalogue' data-params='$dataParams' ";
	$shortcode_text .= "src='https://batteryfinder.global-roam.com/widgets/storageCatalogue.js' type='text/javascript'></script> ";

	return $shortcode_text;
}
?>
