<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly.

$accessibility = array(
	'mi' => __( 'Accessible to disabled people', 'wp-openagenda' ),
	'hi' => __( 'Accessible to the hearing impaired', 'wp-openagenda' ),
	'pi' => __( 'Accessible to the psychic handicapped', 'wp-openagenda' ),
	'vi' => __( 'Accessible to visually impaired', 'wp-openagenda' ),
	'sl' => __( 'Accessible in sign language', 'wp-openagenda' ),

);

function custom_acf_settings_textdomain( $domain ) {
	return 'wp-openagenda';
}

add_filter( 'acf/settings/l10n_textdomain', 'custom_acf_settings_textdomain' );


if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_5d5e7d9037572',
		'title' => __('Évènements', 'wp-openagenda'),
		'fields' => array(
			array(
				'key' => 'field_5d5e7e2889e37',
				'label' => __('Conditions de participation, tarifs', 'wp-openagenda'),
				'name' => 'oa_conditions',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5d5e7e661b977',
				'label' => __('Outils d\'inscription', 'wp-openagenda'),
				'name' => 'oa_tools',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5d5e7e8588a69',
				'label' => __('Âge minimum', 'wp-openagenda'),
				'name' => 'oa_min_age',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					0 => 0,
					1 => 1,
					2 => 2,
					3 => 3,
					4 => 4,
					5 => 5,
					6 => 6,
					7 => 7,
					8 => 8,
					9 => 9,
					10 => 10,
					11 => 11,
					12 => 12,
					13 => 13,
					14 => 14,
					15 => 15,
					16 => 16,
					17 => 17,
					18 => 18,
					19 => 19,
					20 => 20,
					21 => 21,
					22 => 22,
					23 => 23,
					24 => 24,
					25 => 25,
					26 => 26,
					27 => 27,
					28 => 28,
					29 => 29,
					30 => 30,
					31 => 31,
					32 => 32,
					33 => 33,
					34 => 34,
					35 => 35,
					36 => 36,
					37 => 37,
					38 => 38,
					39 => 39,
					40 => 40,
					41 => 41,
					42 => 42,
					43 => 43,
					44 => 44,
					45 => 45,
					46 => 46,
					47 => 47,
					48 => 48,
					49 => 49,
					50 => 50,
					51 => 51,
					52 => 52,
					53 => 53,
					54 => 54,
					55 => 55,
					56 => 56,
					57 => 57,
					58 => 58,
					59 => 59,
					60 => 60,
					61 => 61,
					62 => 62,
					63 => 63,
					64 => 64,
					65 => 65,
					66 => 66,
					67 => 67,
					68 => 68,
					69 => 69,
					70 => 70,
					71 => 71,
					72 => 72,
					73 => 73,
					74 => 74,
					75 => 75,
					76 => 76,
					77 => 77,
					78 => 78,
					79 => 79,
					80 => 80,
					81 => 81,
					82 => 82,
					83 => 83,
					84 => 84,
					85 => 85,
					86 => 86,
					87 => 87,
					88 => 88,
					89 => 89,
					90 => 90,
					91 => 91,
					92 => 92,
					93 => 93,
					94 => 94,
					95 => 95,
					96 => 96,
					97 => 97,
					98 => 98,
					99 => 99,
					100 => 100,
				),
				'default_value' => false,
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'return_format' => 'value',
				'ajax' => 0,
				'placeholder' => '',
				'allow_custom' => 0,
				'search_placeholder' => '',
			),
			array(
				'key' => 'field_5d5e7ea91df1d',
				'label' => __('Âge maximum', 'wp-openagenda'),
				'name' => 'oa_max_age',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					0 => 0,
					1 => 1,
					2 => 2,
					3 => 3,
					4 => 4,
					5 => 5,
					6 => 6,
					7 => 7,
					8 => 8,
					9 => 9,
					10 => 10,
					11 => 11,
					12 => 12,
					13 => 13,
					14 => 14,
					15 => 15,
					16 => 16,
					17 => 17,
					18 => 18,
					19 => 19,
					20 => 20,
					21 => 21,
					22 => 22,
					23 => 23,
					24 => 24,
					25 => 25,
					26 => 26,
					27 => 27,
					28 => 28,
					29 => 29,
					30 => 30,
					31 => 31,
					32 => 32,
					33 => 33,
					34 => 34,
					35 => 35,
					36 => 36,
					37 => 37,
					38 => 38,
					39 => 39,
					40 => 40,
					41 => 41,
					42 => 42,
					43 => 43,
					44 => 44,
					45 => 45,
					46 => 46,
					47 => 47,
					48 => 48,
					49 => 49,
					50 => 50,
					51 => 51,
					52 => 52,
					53 => 53,
					54 => 54,
					55 => 55,
					56 => 56,
					57 => 57,
					58 => 58,
					59 => 59,
					60 => 60,
					61 => 61,
					62 => 62,
					63 => 63,
					64 => 64,
					65 => 65,
					66 => 66,
					67 => 67,
					68 => 68,
					69 => 69,
					70 => 70,
					71 => 71,
					72 => 72,
					73 => 73,
					74 => 74,
					75 => 75,
					76 => 76,
					77 => 77,
					78 => 78,
					79 => 79,
					80 => 80,
					81 => 81,
					82 => 82,
					83 => 83,
					84 => 84,
					85 => 85,
					86 => 86,
					87 => 87,
					88 => 88,
					89 => 89,
					90 => 90,
					91 => 91,
					92 => 92,
					93 => 93,
					94 => 94,
					95 => 95,
					96 => 96,
					97 => 97,
					98 => 98,
					99 => 99,
					100 => 100,
				),
				'default_value' => false,
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'return_format' => 'value',
				'ajax' => 0,
				'placeholder' => '',
				'allow_custom' => 0,
				'search_placeholder' => '',
			),
			array(
				'key' => 'field_5d5e7ec216a31',
				'label' => __('Accessibilité', 'wp-openagenda'),
				'name' => 'oa_a11y',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'mi' => __('Accessible aux personnes handicapées', 'wp-openagenda'),
					'hi' => __('Accessible aux malentendants', 'wp-openagenda'),
					'pi' => __('Accessible aux handicapés psychiques', 'wp-openagenda'),
					'vi' => __('Accessible aux malvoyants', 'wp-openagenda'),
					'sl' => __('Accessible en langue des signes', 'wp-openagenda'),
				),
				'default_value' => array(
				),
				'allow_null' => 0,
				'multiple' => 1,
				'ui' => 0,
				'return_format' => 'value',
				'ajax' => 0,
				'placeholder' => '',
				'allow_custom' => 0,
				'search_placeholder' => '',
			),
			array(
				'key' => 'field_5d50075c33c2d',
				'label' => __('Date de début', 'wp-openagenda'),
				'name' => 'oa_date_begin',
				'type' => 'date_time_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'display_format' => 'd/m/Y H:i:s',
				'return_format' => 'U',
				'first_day' => 1,
			),
			array(
				'key' => 'field_6335343ca1855',
				'label' => __('Date de fin', 'wp-openagenda'),
				'name' => 'oa_date_en',
				'type' => 'date_time_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'display_format' => 'd/m/Y H:i:s',
				'return_format' => 'U',
				'first_day' => 1,
			),
			array(
				'key' => 'field_6335343ca1855',
				'label' => __('Date de fin', 'wp-openagenda'),
				'name' => 'oa_date_en',
				'type' => 'date_time_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'display_format' => 'd/m/Y H:i:s',
				'return_format' => 'U',
				'first_day' => 1,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'openagenda-events',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));

endif;
