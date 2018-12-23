<?php



$my_color_palette = array(
	array(
		'name'  => __( 'strong magenta', 'themeLangDomain' ),
		'slug'  => 'strong-magenta',
		'color' => '#5d001e',
	),
	array(
		'name'  => __( 'light grayish magenta', 'themeLangDomain' ),
		'slug'  => 'light-grayish-magenta',
		'color' => '#e3e2df',
	),
	array(
		'name'  => __( 'very light gray', 'themeLangDomain' ),
		'slug'  => 'very-light-gray',
		'color' => '#e3afbc',
	),
	array(
		'name'  => __( 'very dark gray', 'themeLangDomain' ),
		'slug'  => 'very-dark-gray',
		'color' => '#9a1750',
	),
	array(
		'name'  => __( 'very dark gray', 'themeLangDomain' ),
		'slug'  => 'very-dark-gray',
		'color' => '#ee4c7c',
	),
);

add_theme_support( 'editor-color-palette', $my_color_palette );

function your_prefix_astra_color_palettes() {
	global $my_color_palette;

	$color_palettes = array(
		'#a156b4',
		'#d0a5db',
		'#eee',
		'#444',
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
