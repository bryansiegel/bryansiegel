<?php
// Check for valid url
if(!defined('ABSPATH')) {
	die("Better luck next time!!!");
}

global $wp_notify;
?>
<!-- ==== Generated by WP-Notify Plugin ==== -->
<script type="text/javascript">
jQuery(document).ready(function() {
<?php if($wp_notify[event] == "mousemove") : ?>
	jQuery('body').one('mousemove', showNotify);
<?php elseif ($wp_notify[event] == "onLoad"): ?>
	showNotify();
<?php elseif ($wp_notify[event] == "onScroll"): ?>
	jQuery(window).one("scroll", showNotify);
<?php endif; ?>
<?php if($wp_notify[style] == "stackoverflow") : ?>

function showNotify() {
	jQuery("#notification").fadeIn("slow");
	jQuery(".dismiss").click(function(){
		jQuery("#notification").fadeOut("slow");
	});
}
<?php elseif($wp_notify[style] == "safariAlert") : ?>
jQuery("#notification").css({
	top			: -(jQuery("#notification").outerHeight()*10),
	marginLeft	: -(jQuery("#notification").outerWidth()/2),
	position	: 'fixed',
	left		: '50%'
});
function showNotify() {
	jQuery("#notification").stop().animate({top:0});
	jQuery(".dismiss").click(function(){
		jQuery("#notification").stop().animate({top:-jQuery("#notification").outerHeight()});
	});
	}
<?php elseif($wp_notify[style] == "facebook") : ?>

function showNotify() {
	jQuery("#notification").fadeIn("slow");
	jQuery(".dismiss").click(function(){
		jQuery("#notification").fadeOut("slow");
	});
}
<?php endif;?>	
});
</script>
<!-- ==== Generated by WP-Notify Plugin ==== -->