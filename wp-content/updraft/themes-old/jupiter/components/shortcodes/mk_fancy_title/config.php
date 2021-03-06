<?php
extract( shortcode_atts( array(
	'el_class'						=> '',
	'style'							=> 'false',
	'color_style'					=> 'single_color',
	'color' 						=> '',
	'grandient_color_from' 			=> 'rgba(0, 0, 0, 0)',
	'grandient_color_to' 			=> 'rgba(0, 0, 0, 0)',
	'grandient_color_fallback' 		=> '',
	'grandient_color_angle' 		=> 'vertical',
	'grandient_color_style' 		=> 'linear',
	"size" 							=> '14',
	'force_font_size'				=> 'false',
	'size_smallscreen'				=> '0',
	'size_tablet'					=> '0',
	'size_phone'					=> '36',
	"line_height" 					=> '100',
	'font_weight' 					=> 'inherit',
	'margin_bottom' 				=> '20',
	'txt_transform' 				=> 'initial',
	'letter_spacing' 				=> '0',
	'margin_top' 					=> '0',
	"align" 						=> 'left',
	"responsive_align" 				=> 'center',
	'animation'						=> '',
	"font_family" 					=> '',
	'tag_name' 						=> 'h2',
	'font_style'	 				=> 'inherit',
	"font_type"						=> '',
	'strip_tags'					=> 'false',
	'drop_shadow'					=> 'false',
	"shadow_distance" 				=> '8',
	"shadow_blur" 					=> '20',
	'shadow_color' 					=> 'rgba(0,0,0,0.5)',
	'shadow_angle' 					=> '45'



), $atts ) );
Mk_Static_Files::addAssets('mk_fancy_title');