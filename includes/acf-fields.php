<?php
/**
 * ACF Pieces
 *
 * @package 3dmol
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5eb96b9ac459a',
	'title' => 'Molecule',
	'fields' => array(
		array(
			'key' => 'field_5eb96ba6a44b3',
			'label' => 'Molecule File',
			'name' => 'molecule_file',
			'type' => 'file',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'library' => 'all',
			'min_size' => '',
			'max_size' => '',
			'mime_types' => 'pdb',
		),
	
	array(
			'key' => 'field_5ebaf5820057d',
			'label' => 'url',
			'name' => 'molecule_url',
			'type' => 'url',
			'instructions' => 'Add by url if already online.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
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
));

endif;