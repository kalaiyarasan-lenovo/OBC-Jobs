<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package Creativ Construction FSE
 * @since 1.0.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function creativ_construction_fse_register_block_styles() {
		// Box shadow for columns, column, group and image
		register_block_style(
			'core/columns',
			array(
				'name'  => 'ct-box-shadow',
				'label' => __( 'Box Shadow', 'creativ-construction-fse' )
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'ct-box-shadow',
				'label' => __( 'Box Shadow', 'creativ-construction-fse' )
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'ct-box-shadow-medium',
				'label' => __( 'Box Shadow Medium', 'creativ-construction-fse' )
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'ct-box-shadow-large',
				'label' => __( 'Box Shadow Large', 'creativ-construction-fse' )
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'ct-box-shadow',
				'label' => __( 'Box Shadow', 'creativ-construction-fse' )
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'ct-box-shadow-medium',
				'label' => __( 'Box Shadow Medium', 'creativ-construction-fse' )
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'ct-box-shadow-large',
				'label' => __( 'Box Shadow Larger', 'creativ-construction-fse' )
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'ct-box-shadow',
				'label' => __( 'Box Shadow', 'creativ-construction-fse' )
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'ct-box-shadow-medium',
				'label' => __( 'Box Shadow Medium', 'creativ-construction-fse' )
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'ct-box-shadow-larger',
				'label' => __( 'Box Shadow Large', 'creativ-construction-fse' )
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'ct-box-shadow-hover',
				'label' => __( 'Box Shadow on Hover', 'creativ-construction-fse' )
			)
		);
		register_block_style(
			'core/columns',
			array(
				'name'  => 'ct-box-shadow-hover',
				'label' => __( 'Box Shadow on Hover', 'creativ-construction-fse' )
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'ct-box-shadow-hover',
				'label' => __( 'Box Shadow on Hover', 'creativ-construction-fse' )
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'ct-box-shadow-hover',
				'label' => __( 'Box Shadow on Hover', 'creativ-construction-fse' )
			)
		);

		// Secondary button
		register_block_style(
			'core/button',
			array(
				'name'   => 'ct-button-secondary',
				'label'  => __( 'Secondary', 'creativ-construction-fse' )
			)
		);
	}
	add_action( 'init', 'creativ_construction_fse_register_block_styles' );
}
