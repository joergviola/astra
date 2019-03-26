<?php


// https://www.canva.com/learn/website-color-schemes/ #22

$my_color_palette = array(
	array(
		'name'  => __( 'black', 'themeLangDomain' ),
		'slug'  => 'black',
		'color' => '#000000',
	),
	array(
		'name'  => __( 'white', 'themeLangDomain' ),
		'slug'  => 'white',
		'color' => '#ffffff',
	),
	array(
		'name'  => __( 'blue', 'themeLangDomain' ),
		'slug'  => 'blue',
		'color' => '#7777ff',
	),
//	array(
//		'name'  => __( 'navy blue', 'themeLangDomain' ),
//		'slug'  => 'navy-blue',
//		'color' => '#0f1626',
//	),
//	array(
//		'name'  => __( 'leather', 'themeLangDomain' ),
//		'slug'  => 'leather',
//		'color' => '#ab987a',
//	),
//	array(
//		'name'  => __( 'coral', 'themeLangDomain' ),
//		'slug'  => 'coral',
//		'color' => '#ff533d',
//	),
//	array(
//		'name'  => __( 'eggshell', 'themeLangDomain' ),
//		'slug'  => 'eggshell',
//		'color' => '#f5f5f5',
//	),
//	array(
//		'name'  => __( 'very dark gray', 'themeLangDomain' ),
//		'slug'  => 'very-dark-gray',
//		'color' => '#eeeeee',
//	),
//	array(
//		'name'  => __( 'very dark gray', 'themeLangDomain' ),
//		'slug'  => 'very-dark-gray',
//		'color' => '#444444',
//	),
);

add_theme_support( 'editor-color-palette', $my_color_palette );

function your_prefix_astra_color_palettes() {
	global $my_color_palette;

	$color_palettes = array(
		'#000000',
		'#ffffff',
		'#7777ff',
		'#000000',
		'#000000',
		'#000000',
		'#000000',
		'#000000',
	);

	foreach ($my_color_palette as $i => $color) {
		$color_palettes[$i] = $color['color'];
	}

	return $color_palettes;
}

add_filter( 'astra_color_palettes', 'your_prefix_astra_color_palettes' );
